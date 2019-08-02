@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    List of Jobs
                  </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Job

                        @foreach ($jobs as $job)
                          <p>{{$job['title']}}</p>
                          <p>{{$job['description']}}</p>
                          <p>{{$job['experience']}}</p>
                          <p> <a href="apply/{{ $user['id'] }}/{{ $job['id'] }}">Apply</a> </p>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
