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

                    @foreach ($applications as $applied)
                      @if($applied['intern_id']==$user['id'])
                        <p>{{$applied['title']}}</p>
                        <p>{{$applied['description']}}</p>
                        <p>{{$applied['creator_id']}}</p>
                      @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
