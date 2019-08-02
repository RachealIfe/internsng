<?php

namespace App\Http\Controllers;


use App\User;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function edit(User $user){
    $this ->authorize('update', $user->profile);
    return view('user/editprofile', compact('user'));
  }

  public function update(User $user){
    $this ->authorize('update', $user->profile);
    $data = request()->validate([
      'title' =>'required',
      'description' =>'required',
      'specialization' =>'',
      'interntype' =>'',
      'institution' =>'',
      'course'=>'',
      'graduationyear'=>'',
      'profilephoto'=>'',
      'plantype'=>'',
      'image'=>'',
    ]);


    //dd(request('image')->store('profile','public'));
    if (request('image')) {
      // code...

      $imagePath=request('image')->store('profile','public');

      $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
      $image->save();
      $user->profile->update(array_merge(
        $data,
        ['image'=>$imagePath]
      ));
    }else{
      $user->profile->update($data);
    }

    //
    //auth()->$user->profile->update(array_merge(


    return redirect("/dashboard/{$user->id}");
  }
    public function index($user)
    {
        $user=User::findOrFail($user);
        return view('user/editprofile', [
          'user'=>$user,
        ]);
    }
}
