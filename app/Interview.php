<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = ['with', 'reason', 'date', 'time', 'duration',];
    //
    public function user()
    {
        return $this->hasMany(Interview::class);
        //->withTrashed();
    }
}
