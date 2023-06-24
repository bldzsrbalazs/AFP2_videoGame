<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
-->
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <style>
              .active
              {
                background-color: cadetblue;
              }

            </style>

            <ul class="ml-auto nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="" class="nav-link px-2 text-secondary"> {{ config('app.name') }}</a></li>

                <!--------------------------------------------------------------------------------------------------------------------------------------->
                <div class="btn-group nav-link px-2 text-secondary" >
                    <button type="button" class="btn btn-secondary  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Games
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">See all</a></li>

                            <li> <a href="" class="dropdown-item ">  </a> </li>

                    </ul>
                </div>

                <div class="btn-group nav-link px-2 text-secondary">
                    <button type="button" class="btn btn-secondary  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Companies
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">See all</a></li>

                            <li> <a href="" class="dropdown-item "> </a> </li>

                    </ul>
                </div>
                <div class="btn-group nav-link px-2 text-secondary">
                    <button type="button" class="btn btn-secondary  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Played games
                    </button>
                </div>
                <!--------------------------------------------------------------------------------------------------------------------------------------->


            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <!--<input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">-->
            </form>

            <div class="text-end">
                @auth
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="rounded-circle me-2" width="30" src="{{Auth::user()->avatar}}"/>
                        {{Auth::user()->name}}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->routeIs('profile.show') ? ' active' : '' }}" href="{{route('profile.show',Auth::user()->id)}} ">{{__('Profile')}}</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('profile.setting') ? ' active' : '' }}" href="{{route('profile.show',Auth::user()->id)}}">{{__('Settings')}}</a></li>
                        <li> <a href="{{ route('game.add') }}" class="dropdown-item {{ request()->routeIs('film.add') ? ' active' : '' }}">{{__('Add game')}}</a> </li>
                        <li> <a href="{{ route('company.add') }}" class="dropdown-item {{ request()->routeIs('serie.add') ? ' active' : '' }}">{{__('Add company')}}</a> </li>
                        <li> <form method="post" action="{{ route('logout') }}"> @csrf <button class="dropdown-item ">{{__('Sign out')}}</button> </form> </li>
                    </ul>
                </div>



                @else
                <a href="{{route('login')}}" class="btn btn-outline-light me-2">{{__('Login')}}</a>
                <a href="{{route('register')}}" class="btn btn-warning">{{__('Sign-up')}}</a>
                @endauth

            </div>
        </div>
    </div>
</header>
