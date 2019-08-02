<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [
        'user_id', 'title', 'position', 'experience', 'description', 'duration',
    ];
    protected $guarded =[];
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
