<?php

namespace App\Http\Controllers;

use App\User;
use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function applications($user)
    {
        $applications=Application::all()->toArray();
        $user=User::findOrFail($user);
        return view('/user/company/applications', compact('user', 'applications'));

    }
}
