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

                    You are logged in! {{ $user->name }}
                    <div class="form-group row">
                      <table class="table table-bordered">
                        <tr>
                          <th>Title</th>
                          <th>Description</th>
                          <th>id</th>
                          @foreach ($job as $row)
                            @if($user->id==$row['user_id'])
                              <tr>
                                <td>{{$row['title']}}</td>
                                <td>{{$row['description']}}</td>
                              </tr>
                            @endif
                          @endforeach

                        </tr>
                      </table>

                      <a href="/user/ {{$user->id}}/company/createnewjob">Create A New Job</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
