@extends('layouts.app')

@section('content')
    <div class="pl-5 pr-5">
      <form class="" action="/user/company/{{$user->id}}/edittest/{{$test['id']}}" method="post">

        @csrf


        <div class="pt-3">
          <p> <label for="test_title">Test Title:</label> </p>
          <input type="text" name="title" value="{{$test['title']}}" class="form-control" id="test_title">
        </div>

        <div class="pt-3">
          <p> <label for="test_description">Text Description:</label> </p>
          <input type="text" name="description" value="" class="form-control" id="test_description">
        </div>

        <div class="pt-3">
          <p> <label for="score">Total Score :</label> </p>
          <input type="text" name="score" value="" class="form-control" id="score">
        </div>

        <div class="pt-3">
          <p> <label for="question">Question:</label> </p>
          <input type="text" name="question" value="" class="form-control" id="question">
        </div>
        <div class="pt-3">
          <p> <label for="score">Score:</label> </p>
          <input type="text" name="score" value="" class="form-control" id="score">
        </div>

        @for($i=1; $i<=4; $i++)
        <div class="panel panel-default pt-3">
          <div class="panel-body">
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="optiontext">Option</label>
                    <textarea name="optiontexxt" rows="3" cols="80"></textarea>

                      <p class="help-block"></p>
                      @if($errors->has('optiontext'))
                          <p class="help-block">
                              {{ $errors->first('optiontext')}}
                          </p>
                      @endif
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="correct">Correct</label>
                    <input type="checkbox" name="correct" value="Correct">
                      <p class="help-block"></p>
                      @if($errors->has('correct'))
                          <p class="help-block">
                              {{ $errors->first('correct') }}
                          </p>
                      @endif
                  </div>
              </div>
          </div>
        </div>
        @endfor

        <div class="pt-3">
          <input type="submit" name="savetest" value="Save Question" class="btn btn-primary " id="savetest">
        </div>


      </form>
    </div>

@endsection
