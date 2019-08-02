@extends('layouts.app')

@section('content')
    <div class="pl-5 pr-5">
      <form class="" action="/user/company/{{$user->id}}/createinterview" method="post">
        @csrf


        <div class="pt-3">
          <p> <label for="with">With:</label> </p>
          <input type="text" name="with" value="" class="form-control" id="with">
        </div>

        <div class="pt-3">
          <p> <label for="reason">Reason:</label> </p>
          <input type="text" name="reason" value="" class="form-control" id="reason">
        </div>

        <div class="pt-3">
          <p> <label for="date">Date:</label> </p>
          <input type="text" name="date" value="" class="form-control" id="date">
        </div>

        <div class="pt-3">
          <p> <label for="time">Time:</label> </p>
          <input type="text" name="time" value="" class="form-control" id="time">
        </div>

        <div class="pt-3">
          <p> <label for="duration">Duration:</label> </p>
          <input type="text" name="duration" value="" class="form-control" id="duration">
        </div>

        <div class="pt-3">
          <input type="submit" name="savetest" value="Send Interview" class="btn btn-primary " id="savetest">
        </div>

      </form>
    </div>

@endsection
