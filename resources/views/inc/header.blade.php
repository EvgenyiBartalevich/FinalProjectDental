<div class="container">
    <div class="wrap_nav_conteiner">
        <div class="nav_dental">
            <div class="nav_logo"><img src="{{asset('image/logo.png')}}" alt="logo"></div>
            <a href="{{ route('/') }}">Dental</a>
        </div>
            <nav class="nav_container">
                <button class="nav_toggle"><label for="nav_toggle"></label></button>

                <input type="checkbox" id="nav_toggle">
		        <ul>
			        <li><a href="{{ route('/') }}">главная</a></li>
			        <li><a href="{{ route('add_about') }}">о нас</a></li>
                    <li><a href="{{ route('reviews') }}">отзывы</a></li>
			        <li><a href="{{ route('contacts') }}">контакты</a></li>
                    <li><a href="{{ route('appoinment') }}">заказать талон</a></li>
                    <li><a href="{{ route('ticket') }}">талоны</a></li>
                    @guest
                    <li>
                        <a href="{{ route('login') }}">Вход</a>
                    </li>

                    @else
                    <li>
                    <a class="menu-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                    @endguest
		        </ul>

            </nav>
        </div>
                                