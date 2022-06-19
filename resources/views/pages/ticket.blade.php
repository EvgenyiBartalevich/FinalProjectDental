@extends('layouts.layout')

@section('title_content')
Онлайн тфлон
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Талон</span>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="messages_info"> @include('inc.message') </div>
                    <h1>Добро пожаловать!</br>
                    Сегодня: {{ date('d-m-Y') }}гг.
                    <h3>Ваши online записи:</h3>
                </h1>
            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <button type="button" class="button_app_ticket"><a href="{{ route('free_data') }}" class="button_app_ticket_a">Бесплатная консультация</a></button>
                    <button type="button" class="button_app_ticket"><a href="{{ route('appoinment_data') }}" class="button_app_ticket_a" >Запись на прием</a></button>
                </div>
            </div>
        </div>
    </div>

@endsection
