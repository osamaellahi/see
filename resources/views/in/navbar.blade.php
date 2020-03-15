<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
    <div class="container">
        @if ((!Auth::guest()))
            
<span style="font-size:30px;cursor:pointer;margin-top:0px;margin-right:20px;" onclick="openNav()">&#9776; </span>
        @endif
        <a class="navbar-brand " style="color:blueviolet;font-size:xx-large;font-family:Verdana, Geneva, Tahoma, sans-serif;" href="{{ url('/') }}">
            {{ config('app.name', 'seeService') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <div >
                   @if ((!Auth::guest()))
                   <ul class="navbar-nav mr-auto">
                    <li class="nav-link">
                        <a href="/see/public/posts" class="nav-link tooop">News feed</a>
                    </li>
                    <li class="nav-link">
                        <a href="/see/public/home" class="nav-link tooop">Dashboard</a>
                    </li>
                    <li class="nav-link">
                        <a href="/see/public/message" class="nav-link tooop">Message</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="nav-link tooop">Notification</a>
                    </li>
               
                </ul>
                </div>
                    @else
                        
                    @endif
                  
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <i class="fa fa-sign-in" style="padding-right:10px;"></i></a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Join the community') }}<i class="fa fa-users" style="padding-right:10px;"></i></a>
                        </li>
                    @endif
                @else
                
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           
                                <a class="dropdown-item" href="/see/public/myprofile"><i class="fa fa-user-circle-o" style="padding-right:10px;"></i>  profile</a>
                            
                               
                                <a class="dropdown-item" href="/see/public/setting"><i class="fa fa-gear" style="padding-right:10px;"></i>  setting</a>
                            
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                 <i class="fa fa-sign-out" style="padding-right:10px;"></i> {{ __('Logout') }}
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