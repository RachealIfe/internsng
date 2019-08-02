<?php

namespace App\Http\Controllers;

use App\VerifyUser;
use Illuminate\Http\Request;

class VerifyTokenController extends Controller
{
    //

    public function verifyUser($token)
    {
        $verifyUser = \DB::table('verify_users')->where('token', $token)->first();
        if(isset($verifyUser)){
            $userid = $verifyUser->user_id;
            //$userdetails = \DB::table('users')->where('id', $userid)->first();
            $userdetails = \DB::table('users')->where('id', $userid)->first();
            if($userdetails->verified==0) {
                //dd($userdetails);
                //$userdetails->verified = 1;
                $userdetail = \DB::table('users')->where('id', $userid)->update(['verified'=>1]);

                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login');
        }

        return redirect('/login')->with('status', $status);
    }
}
