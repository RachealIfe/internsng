<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index($user)
    {
        $user=User::findOrFail($user);
        return view('/user/dashboard', [
          'user'=>$user,
        ]);
    }
}
