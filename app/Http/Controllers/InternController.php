<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class InternController extends Controller
{
    //
    public function index($user)
    {
        $user=User::findOrFail($user);
        return view('/user/otherinterns', [
          'user'=>$user,
        ]);
    }

    public function otherinterns($user)
    {
        $allusers=User::all()->toArray();
        $user=User::findOrFail($user);
        return view('/user/otherinterns', [
          'user'=>$user,
          'allusers'=>$allusers,
        ]);
    }
}
