@extends('layouts.layout')

@section('title_content')
Терапия
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Выбор отделения</span>
</div>

<div class="row1_bady">
    <div class="title_class">
        <h1>{{ $data->title }}</h1>
    </div>
        <div class="subject_class">
            <h3>{{ $data->subject }}</h3>
        </div>
    <div class="content_class">
        <p>{{ $data->content }}</p>
    </div>
</div>
    <div class="bnt_class">
        <button type="button" class="green_button_app">
        <a href="{{ route('newticket') }}">Шаг назад</a>
        </button>
        <button type="button" class="green_button_app">
        <a href="{{ route('appoinment') }}">К записи</a>
        </button>
    </div>

    <div class="form_class">
        <form action="add_departmant_data" method="get">
            @csrf
            <input class="green_button_app" type="submit" name="title" id="title" value="Терапевтическое">
        </form>
    </div>


                   
@endsection     


