<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Internng') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    internng
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    @if (Auth::check())
                      @if($user->accounttype=='Intern')
                        <ul class="navbar-nav mr-auto ">
                          <li class="ml-5 pl-5"><a href="/user/{{ $user->id }}/browsejobs">Browse Jobs</a></li>
                          <li class="pl-5"><a href="/user/{{ $user->id }}/applied">Applied To</a></li>
                          <li class="pl-5"><a href="/user/{{ $user->id }}/otherinterns">Other Interns</a></li>
                          <li class="pl-5"><a href="/user/{{ $user->id }}/companies">Companies</a></li>
                          <li class="pl-5"><a href="/user/{{ $user->id }}/tests">My Tests</a></li>
                        </ul>

                      @elseif($user->accounttype=='Company')
                      <ul class="navbar-nav mr-auto ">
                        <li class="ml-5 pl-5"><a href="/user/company/{{ $user->id }}/applications">Applications</a></li>
                        <li class="pl-5"><a href="/user/company/{{ $user->id }}/jobscreated">Jobs Created</a></li>
                        <li class="pl-5"><a href="/user/company/{{ $user->id }}/browseinterns">Browse Interns</a></li>
                        <li class="ml-5 pl-5"><a href="/user/company/{{ $user->id }}/quizzes">Tests</a></li>
                      </ul>
                      @endif
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                @if($user->accounttype=='Intern')
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img style="max-height:20px; max-width:20px;" src="{{ $user->profile->profileImage() }}" class="rounded-circle w-50 h-50">

                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/user/p/{{ $user->id }}">
                                      {{ __('Profile') }}
                                  </a>
                                  <a class="dropdown-item" href="/user/p/changeplan/{{ $user->id }}">
                                      {{ __('Change Plan') }}
                                  </a>
                                  <a class="dropdown-item" href="/user/p/accountsettings/{{ $user->id }}">
                                      {{ __('Account Settings') }}
                                  </a>

                                  @elseif($user->accounttype=='Company')
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img style="max-height:20px; max-width:20px;" src="{{ $user->companyprofile->profileImage() }}" class="rounded-circle w-50 h-50">

                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/user/c/{{ $user->id }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="/user/c/changeplan/{{ $user->id }}">
                                        {{ __('Change Plan') }}
                                    </a>
                                    <a class="dropdown-item" href="/user/c/interviews/{{ $user->id }}">
                                        {{ __('Interview') }}
                                    </a>
                                    <a class="dropdown-item" href="/user/c/accountsettings/{{ $user->id }}">
                                        {{ __('Account Setings') }}
                                    </a>
                                  @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('sidebar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
