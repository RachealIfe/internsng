<?php

namespace App\Http\Controllers;

use App\User;
use App\CompanyProfile;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function edit(User $user){
    //$this ->authorize('update', $user->company_profile);
    return view('user/company/editcompanyprofile', compact('user'));

  }
    public function update(User $user){
      $this ->authorize('update', $user->companyprofile);
      $data = request()->validate([
        'companyname' =>'required',
        'description' =>'required',
        'address' =>'required',
        'size' =>'',
        'vision' =>'',
        'image'=>'',
      ]);



      if (request('image')) {
        // code...

        $imagePath=request('image')->store('companyprofile','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
        $image->save();
        $user->companyprofile->update(array_merge(
          $data,
          ['image'=>$imagePath]
        ));
      }else {
        // code...
        $user->companyprofile->update($data);
      }

      //$user->profile->update($data);


      return redirect("/dashboard/{$user->id}");
    }

    public function index($user)
    {
        $user=User::findOrFail($user);
        return view('/user/company', [
          'user'=>$user,
        ]);
    }

    public function companies($user){
      $companies= CompanyProfile::all()->toArray();
      $user=User::findOrFail($user);
      return view ("/user/companies", [
        'companies'=>$companies,
        'user'=>$user,
      ]);
    }
}
                                                                                                                                                                                                                                                                                                         
