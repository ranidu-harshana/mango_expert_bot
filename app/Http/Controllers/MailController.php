<?php

namespace App\Http\Controllers;

use App\Mail\FertilizerMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWelcomeMail() {
        $auth = app('firebase.auth');
        $uid = session("verfied_user_id");
        try {
            $user = $auth->getUser($uid);
            
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            echo $e->getMessage();
        }


        $details = [
            "title"=>"title",
            "body"=>"Body",
        ];

        Mail::to($user->email)->send(new WelcomeMail($details));
        return redirect()->route("user.plantations");
    }

    public function sendFertilizerMail() {
        $auth = app('firebase.auth');
        $uid = session("verfied_user_id");
        try {
            $user = $auth->getUser($uid);
            
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            echo $e->getMessage();
        }

        $details = [
            "title"=>"All Fertilizer Details",
        ];

        Mail::to($user->email)->send(new FertilizerMail($details));
        return redirect()->route("user.index");
    }
}
