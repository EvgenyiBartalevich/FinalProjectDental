@extends('layouts.layout')

@section('title_content')
Detail
@endsection

@section('content_1')

<div class="container">
    <h1>Запись на прием</h1>
        <div class="alert alert-info">
            <strong>Здравствуйте {{ $data->name }}! Вы записаны на прием, Ваш лечещий врач: {{ $data->doc }}; кабинет: 215;  отделение: {{ $data->deparment }}. Ждем Вас {{ $data->date }} в {{ $data->time }}.</br> С уважением Ваш Dental.
            </div>
                <div class="pull-right">
            <a class="gray_button_app" href="{{ route('appoinment_data') }}"> Назад</a>
        </div>
</div>
@endsection
