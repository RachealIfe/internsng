@extends('layouts.app')

@section('content')

    <div class="pl-5">
        <p>Quizes</p>
        <div class="">
          <button class="btn btn-primary" type="button" name="createquizbutton"> <a href="/user/company/{{ $user->id }}/createtestform" style="color:white;">Create New Test</a> </button>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="pt-5">
            <table>
              @foreach($alltests as $test)
                @if($test['user_id'] == $user['id'])
                  <tr>
                    <td class="pr-5">{{$test['title']}}</td>
                    <td class="pr-5">{{$test['description']}}</td>
                    <td class="pr-5"><button class="btn btn-primary" type="button" name="editquizbutton"> <a href="/user/company/{{ $user->id }}/addquestion/{{ $test['id'] }}" style="color:white;">Add Question</a> </button></td>
                    <td class="pr-5"><button class="btn btn-primary" type="button" name="editquizbutton"> <a href="/user/company/{{ $user->id }}/invitetotest/{{ $test['id'] }}" style="color:white;">Invite intern to test</a> </button></td>
                    <td class="pr-5"><button class="btn btn-danger" type="button" name="editquizbutton"> <a href="/user/company/{{ $user->id }}/edittestform/{{ $test['id'] }}" style="color:white;">Delete</a> </button></td>
                  </tr>

                @endif
              @endforeach

            </table>

          </div>
        </div>
      </div>
    </div>
@endsection
