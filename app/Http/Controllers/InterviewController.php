<?php

namespace App\Http\Controllers;

use App\User;
use App\Interview;
use Mail;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    //
    public function fetchinterviews($user){
        $user=User::findOrFail($user);
        $myinterviews=Interview::where('user_id', $user->id)->cursor();
        //dd($myinterviews);
        return view('/user/company/interviews', compact('user', 'myinterviews'));
    }

    public function create($user, Request $data){
      $user=User::findorFail($user);
      $data=request()->validate([
        'with'=>'required',
        'reason'=>'',
        'date'=>'',
        'time'=>'',
        'duration'=>'',
      ]);
      $sendername=$user->name;
      $with=$data['with'];
      $reason=$data['reason'];
      $date=$data['date'];
      $time=$data['time'];
      $duration=$data['duration'];
      $message="You have been invited for an interview with {$sendername} for {$reason} \n Time: {$time} \n Duration: {$duration}";
      $user->interview()->create($data);
      //Mail::to($with)->send($message);
      $myinterviews=Interview::where('user_id', $user->id)->cursor();
      return view ('/user/company/interviews', ['user'=>$user, 'myinterviews'=>$myinterviews]);

    }
}
