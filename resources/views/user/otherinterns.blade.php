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

                    Other Interns

                    @foreach($allusers as $alluser)
                      @if($alluser['id']!=$user['id'])
                        @if($alluser['accounttype']=='Intern')
                         <p>{{$alluser['name']}}</p>
                         <p>{{$alluser['accounttype']}}</p>
                        @endif
                        <p></p>
                      @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
