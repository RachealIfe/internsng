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

                    Interns
                      <table class="table">
                        <tr>
                          <th>Name</th>
                          @foreach ($interns as $row)
                          <p>{{$row['name']}}</p>
                            <p>{{$row->profile['title']}}</p>
                            <button type="button" name="invitebtn" class="btn btn-primary"> <a href="/user/company/{{$user->id}}/select/{{$test->id}}/{{$row->id}}" style="color:white;">Send Invite</a> </button>
                          @endforeach
                        </tr>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
