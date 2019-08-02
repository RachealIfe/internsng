@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

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
              </div>

    </div>
</div>
@endsection
