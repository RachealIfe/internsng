@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    Create New Job
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
                      <form method="POST" action="/user/company/{{$user->id}}/createnewjob">
                          @csrf


                          <div class="form-group row">
                              <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Job Titile') }}</label>

                              <div class="col-md-6">
                                  <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>

                                  @error('title')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                              <div class="col-md-6">
                                  <input id="position" type="position" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}"  autocomplete="position">

                                  @error('position')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                              <div class="col-md-6">
                                  <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience"  autocomplete="experience">

                                  @error('experience')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                              <div class="col-md-6">
                                  <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description">

                                  @error('phonenumber')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                              <div class="col-md-6">
                                  <input id="duration" type="text" class="form-control @error('duration') is-invalid @enderror" name="duration"  autocomplete="duration">

                                  @error('duration')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Create') }}
                                  </button>
                              </div>
                          </div>
                      </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
