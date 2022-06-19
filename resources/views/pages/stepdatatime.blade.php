@extends('layouts.layout')

@section('title_content')
Выбор даты и времени
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span><a href="{{ route('newticketdoc') }}">Шаг назад</a></span>
    <div class="nav_div">></div>
    <span>Шаг четвертый</span>
</div>

<div class="row1_bady">
    <h1>Заказ талона</h1>
    <h1>выбор даты и время</h1>
        <div class="wrap_content_class">
            <div class="img_doc_class">
                <img src="{{asset('image/time_icon.png')}}" width="300px" alt="doc">
            </div>
        <div class="form_class_button">
            <form action="#" method="post">
                <p><strong>Выбрать дату:</strong></p>
                <input type="date" name="date" id="date">
                <p><strong>Выбрать время:</strong></p>
                <input type="time" name="time" id="time"><br/>
                <button type="submit" value="#" class="green_button_app">
                <a href="{{ route('list_user') }}">Выбрать</a></button>
            </form>

            <form action="#" method="get">
            @csrf
            <input type="submit" name="name_doctors" id="name_doctors" value="Выбрать" class="green_button_app">
        </form>
        </div>
        <hr/>
    </div>
</div>
                             
@endsection     


