@extends('layouts.app')

@section('content')
<div class="container">
    <div class="line_bord_home"></div>
        <div class="nav_general_box">
            <a href="{{ route('/') }}">home</a>
                <div class="nav_div">></div>
                <span>Profile</span>
                    </div>
                <!--<div class="card">-->
            <h3>{{ __('Profile:') }}</h3>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ Auth::user()->name }} , {{ __('You have successfully logged! Welcome!') }}</h4>
                </div>
                        <h2>Your name: {{ Auth::user()->name }}</h2>
                        <h3>Appoinment to the doctor:</h3>

                        <div class="">
                        
                        </div>
        <div class="line_bord_home_footer"></div>
<footer class="footer_container">
    <div class="content_footer_container">
    <p>Copyright &copy; 2020 All rights Reserved - Dental. Bartalevich E.A. 2022</p>
    </div>
</footer>
</div>
@endsection
