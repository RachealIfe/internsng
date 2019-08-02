<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    //
    //use SoftDeletes;

    protected $fillable = ['question', 'score'];


    /**
     * Set attribute to money format
     * @param $input
     */


    public function setScoreAttribute($input)
    {
        $this->attributes['score'] = $input ? $input : null;
    }

    public function options()
    {
        return $this->hasone(QuestionOption::class);
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'question_test');
    }

}
