<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Kreait\Firebase\Exception\Auth\PhoneNumberExists;
use Kreait\Firebase\Request\UpdateUser;

class UserController extends Controller
{
    public function guest() {
        return view('welcome');
    }
    
    public function index() {
        return view('user.index');
    }

    public function planting_details_pdf() {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('user.planting-details-pdf');
        return $pdf->stream();
    }

    public function plantations () {
        $database = app('firebase.database');
        $results = $database->getReference('/user_profile/'.session('verfied_user_id').'/')->getSnapshot()->getValue();;

        $auth = app('firebase.auth');
        try {
            $user = $auth->getUser(session('verfied_user_id'));
            
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            echo $e->getMessage();
        }
        return view("user.plantations", ["user_details"=>$results, "user"=>$user]);
    }

    public function profile () {
        $auth = app('firebase.auth');
        try {
            $user = $auth->getUser(session('verfied_user_id'));
            
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            echo $e->getMessage();
        }
        return view("user.profile", ["user"=>$user]);
    }

    public function update (Request $request) {
        $auth = app('firebase.auth');
        $uid = session("verfied_user_id");

        $properties = [
            'displayName' => $request->displayName,
            'phoneNumber' => $request->phoneNumber,
        ];

        try{
            $updatedUser = $auth->updateUser($uid, $properties);
            session()->flash("mobno_exist", "Details Saved");
        } catch (Exception $e) {
            if ($e->getMessage() == "The phone number is already in use by another account.") {
                session()->flash("mobno_exist", $e->getMessage());
            } else {
                session()->flash("mobno_exist", "Invalid Phone Number. Number format ex: +94776549854");
            }
            
        }
        
        return back();
    }

    public function fertilizer (Request $request) {
        $database = app('firebase.database');

        $uid = session("verfied_user_id");
        if ($request->zone == "wet_zone") {
            $updates = [
                $uid => $request->plant_id,
            ];
            
            $database->getReference('for_wetzone_table/'.$request->fertilizer_id)->update($updates);
        } elseif ($request->zone == "dry_zone") {
            $updates = [
                $uid => $request->plant_id,
            ];
            
            $database->getReference('for_dryzone_table/'.$request->fertilizer_id)->update($updates);
        }
        
        return back();
    }
}
