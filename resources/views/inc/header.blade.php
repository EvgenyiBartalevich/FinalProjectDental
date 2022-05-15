<div class="container">
    <div class="wrap_nav_conteiner">
        <div class="nav_dental">
            <img src="{{asset('image/logo.png')}}" alt="logo"><a href="{{ url('/') }}">Dental</a>
        </div>
            <nav class="nav_container">
		        <ul>
			        <li><a href="{{ url('/') }}">home</a></li>
			        <li><a href="{{ url('/about') }}">about</a></li>
			        <li><a href="{{ url('/appoinment') }}">appoinment</a></li>
                    <li><a href="{{ url('/review') }}">reviews</a></li>
			        <li><a href="{{ url('/contacts') }}">contacts</a></li>
		        </ul>
            </nav>
        @if (Route::has('login'))
                <form class="nav_dental_log">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <button class="nav_button_log"><a href="{{ route('login') }}">Log in</a></button>

                        @if (Route::has('register'))
                        <button class="nav_button_reg"><a href="{{ route('register') }}">Register</a> </button>
                        @endif
                    @endauth
                </form>
            @endif
            </div>
<div class="line_bord"></div>
