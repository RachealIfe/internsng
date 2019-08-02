<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    //
    //use SoftDeletes;

    protected $fillable = ['title', 'description',];


    /**
     * Set to null if empty
     * @param $input
     */
    /*public function setCourseIdAttribute($input)
    {
        $this->attributes['course_id'] = $input ? $input : null;
    }*/

    /**
     * Set to null if empty
     * @param $input
     */
    /*public function setLessonIdAttribute($input)
    {
        $this->attributes['lesson_id'] = $input ? $input : null;
    }*/

    /*public function course()
    {
        return $this->belongsTo(Course::class, 'course_id')->withTrashed();
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id')->withTrashed();
    }*/


    public function questions()
    {
        return $this->hasMany(Question::class);
        //->withTrashed();
    }
}
