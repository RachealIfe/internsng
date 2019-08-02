<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    //
    protected $guarded =[];
    
    public function profileImage(){
      $imagePath=($this->image) ? $this->image : 'profile/QOLWRMdFxSjGYOyOT5qhuZMCZDaTaMVMIaf2RgN3.png';
      return '/storage/'. $imagePath;
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
