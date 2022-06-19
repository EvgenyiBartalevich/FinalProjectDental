@extends('layouts.layout')

@section('title_content')
Личные данные
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span><a href="{{ route('step_data_time') }}">Шаг назад</a></span>
    <div class="nav_div">></div>
    <span>Шаг пятый</span>
    <div class="nav_div">|</div>
    <span>Финиш</span>
</div>

<div class="row1_bady">
    <h1>Заказ талона</h1>
    <h1>личные данные</h1>
        <div class="wrap_content_class">
            <div class="img_doc_class">
                <img src="{{asset('image/user_icon.png')}}" width="300px" alt="doc">
            </div>
        <div class="form_class_button">
            <form action="#" method="post">
                <p><strong>Ваше имя:<input type="text" id="name" name="name" placeholder="Ваше имя"></strong></p>
                <p><strong>Ваш номер телефона:<input type="text" id="phone" name="phone" placeholder="Тел."></strong></p>
                <p><strong>Ваш email:<input type="text" id="email" name="email" placeholder="Email"></strong></p>
                <p><strong>Примечание:<textarea name="comment" id="comment" placeholder="Примечание.."></textarea></strong></p>
                <button type="submit" class="gray_button_app">Отправить</button>
            </form>
        </div>
        <hr/>
    </div>
</div>
                             
@endsection     


