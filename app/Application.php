<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = [
        'creator_id', 'title', 'description', 'intern_id', 'intern_name',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
