@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    Profile
                  </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-3 p-5">
                        <img src="{{ $user->profile->profileImage() }}" class="h-100 w-100">
                        <p> <a href="/user/{{ $user->id }}/editprofile">Edit your profile</a> </p>
                    </div>

                    <div class="col-md-6 p-5">
                        <p class="pt-5">Name: {{ $user->name }}</p>
                        <p>Intern Type: {{ $user->profile->interntype }} Intern</p>
                        <p>Description: {{ $user->profile->description }}</p>
                        <p>Institution: {{ $user->profile->institution }}</p>
                        <p>Course: {{ $user->profile->course }}</p>
                        <p>Graduation Year: {{ $user->profile->graduationyear }}</p>
                    </div>
                    <div class="col-md-3 pt-3">
                      <div class="">
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
