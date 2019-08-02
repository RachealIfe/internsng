@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    Dashboard
                  </div>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-6">
                      <h3>Interviews sent out by you.</h3>
                    </div>
                    <div class="col-md-6">
                      <h3> <button type="button" class="btn btn-primary" name="button"> <a href="/user/company/{{$user->id}}/createinterviewform" style="color:white;"> Send out new interview</a></button> </h3>
                    </div>


                    <div class="pt-3">
                      <table class="">
                        <tr>
                          <th>With</th>
                          <th>Reason</th>
                          <th>Duration</th>
                        @foreach($myinterviews as $myinterview)
                          <tr>
                            <td class="pr-5">{{$myinterview->with}}</td>
                            <td class="pr-5">{{$myinterview->reason}}</td>
                            <td class="pr-5">{{$myinterview->duration}}</td>
                          </tr>
                          @endforeach
                        </tr>
                      </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
