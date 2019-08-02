@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($allusers as $row)
              <div class="col-md-3">
                <img src="{{$row->profile->profileImage()}}" alt="" class="w-50 h-50">
                <p class="pt-3">{{$row['name']}}</p>
                <p>{{$row->profile->interntype}}</p>
              </div>
              <div class="col-md-9">
                <p>{{$row->profile->title}}</p>
                <p>{{$row->profile->specialization}}</p>
                <p>{{$row->profile->course}}</p>
                <p>{{$row->profile->institution}}</p>
                <p> <a href="/user/c/{{$user->id}}/viewinternprofile/{{$row['id']}}">View Profile</a> </p>
              </div>
        @endforeach

    </div>
</div>
@endsection
