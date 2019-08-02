@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    List of Jobs
                  </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Test

                    <form class="form form-control" action="/user/{{$user->id}}/{{$test['id']}}/submittest" method="post">
                      @foreach ($questions as $question)
                       @for($i = 0; $i < $questions->count(); $i++)
                        <p>{{$i+1}}. {{$question['question']}}</p>
                          <div class="">
                              <input id="" type="checkbox" class="" name="option_text1" value="1">{{$question->options['option_text']}}
                              <input id="" type="checkbox" class="" name="option_text2" value="1">{{$question->options['option_text2']}}
                              <input id="" type="checkbox" class="" name="option_text3" value="1">{{$question->options['option_text3']}}
                              <input id="" type="checkbox" class="" name="option_text4" value="1">{{$question->options['option_text4']}}
                          </div>
                        @endfor
                      @endforeach

                      <input type="submit" name="submitform" class="btn btn-primary" value="Submit Answers">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
