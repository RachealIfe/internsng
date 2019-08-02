@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                <div class="text-center">
                  Free Plan
                </div>

              </div>

              <div class="text-center mt-5 mb-5">
                <ul>
                  <li>Browse available Jobs</li>
                  <li>Browse available Jobs</li>
                  <li>Browse available Jobs</li>
                  <li>Browse available Jobs</li>
                </ul>
                <button type="button" name="changeplan" class="btn btn-primary"> <a href="/user/intern/changeplan/{{$user->id}}/free" style="color:white;">Save Plan</a> </button>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                <div class="text-center">
                  Premium Plan
                </div>

              </div>

              <div class="text-center mt-5 mb-5">
                <ul>
                  <li>Browse available Jobs</li>
                  <li>Browse available Jobs</li>
                  <li>Browse available Jobs</li>
                  <li>Browse available Jobs</li>
                </ul>
                <button type="button" name="changeplan" class="btn btn-primary"> <a href="/user/intern/changeplan/{{$user->id}}/free" style="color:white;">Save Plan</a> </button>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
