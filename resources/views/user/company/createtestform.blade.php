@extends('layouts.app')

@section('content')
    <div class="pl-5 pr-5">
      <form class="" action="/user/company/{{$user->id}}/createtest" method="post">
        @csrf


        <div class="pt-3">
          <p> <label for="test_title">Test Title:</label> </p>
          <input type="text" name="title" value="" class="form-control" id="test_title">
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
          <input type="submit" name="savetest" value="Save Test" class="btn btn-primary " id="savetest">
        </div>

      </form>
    </div>

@endsection
