@extends('layouts.layout')

@section('title_content')
Талоны
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Талоны</span>
</div>
    <h1>Ваш талон</h1>
        <div class="table_containet">
            <h5>Вид отделения:</h5><h2>{{ $department->department }}</h2>
            <h5>Лечащий врач:</h5><h2>#</h2>
            <h5>Дата:</h5><h2>#</h2>
            <h5>Врямя:</h5><h2>#</h2>
            <h3>Информация о поциенте:</h3>
            <h5>Имя поциента:</h5><h2>#</h2>
            <h5>Контактный телефон:</h5><h2>#</h2>
            <h5>Электронная почта:</h5><h2>#</h2>
        </div>

@endsection
