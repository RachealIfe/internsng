<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestResultsAnswer extends Model
{
    //
    protected $fillable = ['tests_result_id', 'question_id', 'option_id', 'correct'];
}
