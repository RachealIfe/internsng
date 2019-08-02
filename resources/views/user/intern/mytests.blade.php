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

                    Test

                        @foreach ($tests as $test)
                          <p>{{$test['id']}}</p>
                          <p>{{$test['title']}}</p>
                          <p>{{$test->test['description']}}</p>
                          <p> <button type="button" name="button" class="btn btn-primary"><a href="/user/{{ $user['id'] }}/{{ $test['id'] }}/taketest" style="color:white;">Take Test</a></button>  </p>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
