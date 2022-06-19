@extends('layouts.layout')

@section('title_content')
Все талоны
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Все талоны</span>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="messages_info"> @include('inc.message') </div>
                    <h1>Добро пожаловать!<br/>Сегодня: {{ date('d-m-Y') }}гг.</h1>
                    <h3>Ваши online записи:</h3> 
                        <button type="submit" class="green_button_app">
                            <a href="{{ route('allshow') }}">Талон</a>
                        </button>
                </div>
            </div>
        </div>
    </div>

@endsection
