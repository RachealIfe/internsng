<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionOption extends Model
{
    //

    //use SoftDeletes;

    protected $fillable = ['option_text', 'correct', 'option_text2', 'correct2', 'option_text3', 'correct3', 'option_text4', 'correct4', 'question_id'];


    /**
     * Set to null if empty
     * @param $input
     */
    public function setQuestionIdAttribute($input)
    {
        $this->attributes['question_id'] = $input ? $input : null;
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
        //->withTrashed();
    }
}
