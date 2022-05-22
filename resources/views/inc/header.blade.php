<div class="container">
    <div class="wrap_nav_conteiner">

        <div class="nav_dental">
            <div class="nav_logo"><img src="{{asset('image/logo.png')}}" alt="logo"></div>
            <a href="{{ route('/') }}">Dental</a>
        </div>
            <nav class="nav_container">
		        <ul>
			        <li><a href="{{ route('/') }}">home</a></li>
			        <li><a href="{{ route('about') }}">about</a></li>
			        <li><a href="{{ route('appoinment') }}">appoinment</a></li>
                    <li><a href="{{ route('reviews') }}">reviews</a></li>
			        <li><a href="{{ route('contacts') }}">contacts</a></li>
		        </ul>
            </nav>
        @if (Route::has('login'))
                <form class="nav_dental_log">
                    @auth
                        <div class="nav_button_home">
                        <a href="{{ route('home') }}">Profile</a>
                        </div>
                    @else
                        <button class="nav_button_log"><a href="{{ route('login') }}">Login</a></button>

                        @if (Route::has('register'))
                        <button class="nav_button_reg"><a href="{{ route('register') }}">Register</a> </button>
                        @endif
                    @endauth
                </form>
            @endif
        </div>