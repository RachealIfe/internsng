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
                        <img src="{{ $user->companyprofile->profileImage() }}" class="h-100 w-100">
                        <p> <a href="/user/c/{{ $user->id }}/editprofile">Edit your profile</a> </p>
                    </div>
                    <div class="col-md-6 p-5">
                        <p class="pt-5">Name{{ $user->name }}</p>
                        <p>Company Name: {{ $user->companyprofile->companyname }}</p>
                        <p>Description: {{ $user->companyprofile->description }}</p>
                        <p>Vision: {{ $user->companyprofile->vision }}</p>
                        <p>Size: {{ $user->companyprofile->size }}</p>
                        <p>Address: {{ $user->companyprofile->address }}</p>
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
