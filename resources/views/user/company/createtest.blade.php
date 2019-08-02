@extends('layouts.app')

@section('content')
    <div class="pl-5">
      <div class="">
        <p> <label for="test_title">Test Title:</label> </p>
        <input type="text" name="quiz_title" value="" class="form-control" id="test_title">
      </div>

      <div class="">
        <p> <label for="test_description">Text Description:</label> </p>
        <input type="text" name="test_description" value="" class="form-control" id="test_description">
      </div>

      <div class="">
        <p> <label for="score">Total Score:</label> </p>
        <input type="text" name="score" value="" class="form-control" id="score">
      </div>
    </div>
@endsection
