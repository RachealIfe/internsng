@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    List of interns
                  </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Companies

                    @foreach ($companies as $company)
                      <p>{{$company['companyname']}}</p>
                      <p> <a href="#">View Profile</a> </p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
