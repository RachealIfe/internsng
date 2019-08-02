<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Profile;
use App\Application;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index($user)
    {
        $jobs=Job::all()->toArray();
        $user=User::findOrFail($user);
        return view('/user/jobs', compact('user', 'jobs'));

    }

    public function display($user){
      $user=User::findOrFail($user);
      //=User::all()->toArray();
      $allusers=User::where('accounttype', 'Intern')->cursor();
      return view('/user/company/browseinterns', compact('user', 'allusers'));
    }

    public function myjobs($user){
      $job=Job::all()->toArray();
      $user=User::findOrFail($user);
      return view('/user/company/jobscreated', compact('user', 'job'));
    }

    public function applied($user){
      $job=Job::all()->toArray();
      $user=User::findOrFail($user);
      $applications=Application::all()->toArray();
      return view('/user/applied', compact('user', 'job', 'applications'));
    }

    public function apply($user, $job){
      $job=Job::findOrFail($job);
      $user=User::findOrFail($user);
      $creator_id=$job->user_id;
      $title=$job->title;
      $description=$job->description;
      $intern_id=$user->id;
      $intern_name=$user->name;


      $data=([
        'creator_id'=>$creator_id,
        'title'=>$title,
        'description'=>$description,
        'intern_id'=>$intern_id,
        'intern_name'=>$intern_name,

      ]);

      $user->application()->create($data);

      return view('user/dashboard', ['user'=>$user,]);




    }
}
