<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kreait\Firebase\Contract\Database;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

class LoginController extends Controller
{

    public function login_form(){
        return view('Auth.login');
    }

    

    public function login(Request $request){
        $auth = app('firebase.auth');

        $request->validate([
            'email'=>['email', 'required'],
            'password'=>['required'],
        ]);
        try {
            $user = $auth->getUserByEmail("$request->email");
            try{
                $signInResult = $auth->signInWithEmailAndPassword($request->email, $request->password);
                $idTokenString = $signInResult->idToken();

                try {
                    $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                    $uid = $verifiedIdToken->claims()->get('sub');

                    $_SESSION['idTokenString'] = $idTokenString;
                    $claims = $auth->getUser($uid)->customClaims;

                    if(!$claims == NULL) {
                        if($claims[0] == "admin") {
                            session(['verfied_admin_id' => $uid]);
                            return redirect('botmans');
                        }
                    }else{
                        session(['verfied_user_id' => $uid]);
                        return redirect('botmans');
                    }


                } catch (FailedToVerifyToken $e) {
                    echo 'The token is invalid: '.$e->getMessage();
                }
            }catch(Exception $e) {
                echo $e->getMessage();
            }

        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            echo $e->getMessage();
        }
    }

    public function register(){
        // 
    }
}