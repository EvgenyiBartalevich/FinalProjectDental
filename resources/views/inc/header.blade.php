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
                    <li><a href="{{ route('ticket') }}">all tickets</a></li>
                    @guest
                    <li>
                        <a href="{{ route('login') }}">login</a>
                    </li>
                    
                    @else
                    <li>
                    <a class="menu-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                    @endguest
		        </ul>

            </nav>
        </div>
                                