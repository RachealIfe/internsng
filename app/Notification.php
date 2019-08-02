<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $fillable = ['title', 'message',];
    
    public function user()
    {
        return $this->hasMany(Notification::class);
        //->withTrashed();
    }
}
