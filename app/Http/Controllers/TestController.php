<?php

namespace App\Http\Controllers;

use App\User;
use App\Test;
use App\Profile;
use App\TakeTest;
use App\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function tests($user){
      $user=User::findOrFail($user);
      $alltests=Test::where('user_id', $user->id)->cursor();
      return view('/user/company/quizzes', compact('user', 'alltests'));
    }

    public function create($user, Request $data){
      $user=User::findorFail($user);
      $alltests=Test::where('user_id', $user->id)->cursor();
      $data=request()->validate([
        'title'=>'required',
        'description'=>'',
      ]);
      $user->test()->create($data);
      return view ("/user/company/quizzes", compact('user', 'alltests'));
    }

    public function update($user, $test, Request $data){
      $user=User::findorFail($user);

      $test=Test::findorFail($test);
      $alltests=Test::where('user_id', $user->id)->cursor();
      $data=request()->validate([
        'question'=>'required',
        'score'=>'',
      ]);
      //dd($test->questions);
      $question=$test->questions()->create($data);
      //dd($data);
      $optiondata=request()->validate([
        'option_text'=>'required',
        'correct'=>'',
        'option_text2'=>'',
        'correct2'=>'',
        'option_text3'=>'',
        'correct3'=>'',
        'option_text4'=>'',
        'correct4'=>'',
      ]);
      //dd($optiondata);
      $question->options()->create($optiondata);
      return view ("/user/company/quizzes", compact('user', 'alltests'));
      //return view('/user/company/edittestform', ['user'=>$user, 'test'=>$test]);
    }


    public function inviteintern($user, $test){
      $user=User::findOrFail($user);
      $interns=User::where('accounttype', 'Intern')->cursor();
      //$interns=User::with(['profile'])->all()->toArray();
      //$userintern=User::
      $test=Test::findOrFail($test);
      return view('/user/company/selectinterns', ['user'=>$user, 'interns'=>$interns, 'test'=>$test]);
    }

    public function select($user, $test, $row){
      //dd($row);
      $user=User::findorFail($user);
      $row=User::findOrFail($row);
      $test=Test::findOrFail($test);
      $user->taketest()->create([
        'intern_id'=>$row->id,
        'test_id'=>$test->id,
        'title'=>$test->title,
        'token' => str_random(50),
      ]);
    }

    public function fetchtests($user){
      $user=User::findorFail($user);
      $tests=TakeTest::where('intern_id', $user->id)->cursor();

      return view('\user\intern\mytests', compact('user', 'tests'));
    }

    public function displaytest($user, $test){
      $user=User::findorFail($user);
      //$test=
      $test=Test::findorFail($test);
      $questions=Question::where('test_id', $test->id)->get();
      //$count=$questions->count();
      return view ('/user/intern/testscreen', compact('user', 'test', 'questions'));
    }
}
