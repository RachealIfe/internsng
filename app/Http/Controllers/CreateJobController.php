<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Job;
use Illuminate\Http\Request;

class CreateJobController extends Controller
{
    //

    public function __constructor(){
      $this->middleware('auth');
    }

    protected function create()
    {
        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'accounttype' => $data['accounttype'],
            'password' => Hash::make($data['password']),
        ]);*/
        $user=auth()->user();
        $data = request()->validate([
          'title' =>'required',
          'position' =>'required',
          'experience' =>'required',
          'description' =>'required',
          'duration' =>'required',

        ]);

        $job=Job::create([
          'user_id' => auth()->user()->id,
          'title' => $data['title'],
          'position' => $data['position'],
          'experience' => $data['experience'],
          'description' => $data['description'],
          'duration' => $data['duration'],
        ]);

        //return view('/user/company/{auth()->user()->id}/jobscreated');
        return view('/user/dashboard', compact('user','job'));
        //return view('/user/company/jobscreated', compact('user'));

        /*$verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));*/
    }

    public function createjob($user){
      $user=User::findOrFail($user);
      return view('/user/company/createnewjob', compact('user'));
    }
    public function index($user){

    }
}
