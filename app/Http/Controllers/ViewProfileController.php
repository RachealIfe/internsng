<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ViewProfileController extends Controller
{
    //

    public function internprofile($user, $row){
      $user=User::findorFail($user);
      $row=User::findorFail($row);

      return view('user/company/viewinternprofile', compact('user', 'row'));
    }

    public function companyprofile($user, $row){
      $user=User::findorFail($user);
      $row=User::findorFail($row);

      return view('user/intern/viewcompanyprofile', compact('user', 'row'));
    }
}
