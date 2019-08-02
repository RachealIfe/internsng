@extends('layouts.app')

@section('content')
    <div class="pl-5 pr-5">
      <form class="" action="/user/company/{{$user->id}}/addquestion/{{$test['id']}}/save" method="post">

        @csrf


        <div class="pt-3">
          <p> <label for="test_title">Test Title:</label> </p>
          <input type="text" name="title" value="{{$test['title']}}" class="form-control" id="test_title">
        </div>

        <div class="pt-3">
          <p> <label for="test_description">Text Description:</label> </p>
          <input type="text" name="description" value="{{$test['title']}}" class="form-control" id="test_description">
        </div>

        <div class="pt-3">
          <p> <label for="question">Question:</label> </p>
          <input type="text" name="question" value="" class="form-control" id="question">
        </div>
        <div class="pt-3">
          <p> <label for="score">Score:</label> </p>
          <input type="text" name="score" value="" class="form-control" id="score">
        </div>

        <div class="panel panel-default pt-3">
          <div class="panel-body">
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="option_text">Option</label>
                    <textarea name="option_text" rows="3" cols="80"></textarea>

                      <p class="help-block"></p>
                      @if($errors->has('option_text'))
                          <p class="help-block">
                              {{ $errors->first('option_text')}}
                          </p>
                      @endif
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="correct">Correct</label>
                    <input type="checkbox" name="correct" value="1">
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

        <div class="panel panel-default pt-3">
          <div class="panel-body">
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="option_text2">Option</label>
                    <textarea name="option_text2" rows="3" cols="80"></textarea>

                      <p class="help-block"></p>
                      @if($errors->has('option_text2'))
                          <p class="help-block">
                              {{ $errors->first('option_text2')}}
                          </p>
                      @endif
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="Correct2">Correct</label>
                    <input type="checkbox" name="Correct2" value="1">
                      <p class="help-block"></p>
                      @if($errors->has('Correct2'))
                          <p class="help-block">
                              {{ $errors->first('Correct2') }}
                          </p>
                      @endif
                  </div>
              </div>
          </div>
        </div>

        <div class="panel panel-default pt-3">
          <div class="panel-body">
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="option_text3">Option</label>
                    <textarea name="option_text3" rows="3" cols="80"></textarea>

                      <p class="help-block"></p>
                      @if($errors->has('option_text3'))
                          <p class="help-block">
                              {{ $errors->first('option_text3')}}
                          </p>
                      @endif
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="correct3">Correct</label>
                    <input type="checkbox" name="correct3" value="1">
                      <p class="help-block"></p>
                      @if($errors->has('correct3'))
                          <p class="help-block">
                              {{ $errors->first('correct3') }}
                          </p>
                      @endif
                  </div>
              </div>
          </div>
        </div>

        <div class="panel panel-default pt-3">
          <div class="panel-body">
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="option_text4">Option</label>
                    <textarea name="option_text4" rows="3" cols="80"></textarea>

                      <p class="help-block"></p>
                      @if($errors->has('option_text4'))
                          <p class="help-block">
                              {{ $errors->first('option_text4')}}
                          </p>
                      @endif
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 form-group">
                    <label for="correct4">Correct</label>
                    <input type="checkbox" name="correct4" value="1">
                      <p class="help-block"></p>
                      @if($errors->has('correct4'))
                          <p class="help-block">
                              {{ $errors->first('correct4') }}
                          </p>
                      @endif
                  </div>
              </div>
          </div>
        </div>

        <div class="pt-3">
          <input type="submit" name="savetest" value="Save Question" class="btn btn-primary " id="savetest">
        </div>


      </form>
    </div>

@endsection
