<?php

namespace App\Http\Controllers;

use App\User;
use App\Notification;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //
    public function internindex($user){
      $user=User::findorFail($user);
      return view('/user/intern/changeplan', ['user'=>$user]);
    }

    public function companyindex($user){
      $user=User::findorFail($user);
      return view('/user/company/changeplan', ['user'=>$user]);
    }

    public function internfreeplan(User $user){
      $userplan=\DB::table('users')->where('id', $user->id)->update(['plantype'=>'free']);
      return redirect("/dashboard/{$user->id}");
    }

    public function internpremiumplan(User $user){
      $userplan=\DB::table('users')->where('id', $user->id)->update(['plantype'=>'premium']);
      return redirect("/dashboard/{$user->id}");
    }

    public function companyfreeplan(User $user){
      $userplan=\DB::table('users')->where('id', $user->id)->update(['plantype'=>'free']);
      $usernotify=User::findorFail($user);
      $user->notification()->create([
        'title'=>'Plan changed successfully',
        'message'=>'Plan Type changed to free'
      ]);
      return redirect("/dashboard/{$user->id}");
    }

    public function companypremiumplan(User $user){
      $userplan=\DB::table('users')->where('id', $user->id)->update(['plantype'=>'premium']);
      return redirect("/dashboard/{$user->id}");
    }
}
