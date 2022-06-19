@extends('layouts.layout')

@section('title_content')
Специалисты ортопедии
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Выбор специалиста</span>
</div>

<div class="row1_bady">
    <h1>Заказ талона</h1>
    <h2>выбор врача ортопеда</h2>
    @foreach($data as $el)
        <div class="wrap_content_class">
            <div class="img_doc_class">
                <img class="img_class_doc" src="{{asset('image/show_doc_1.png')}}" width="300px" alt="doc">
            </div>
        <div class="centr_content">
            <h2>{{ $el->name }}</h2>
            <h4>{{ $el->direction }}</h4>
            <strong>Расписание работы:</strong>
            <h3>{{ $el->time }}</h3>
            <strong>Инфо:</strong>
            <h4>{{ $el->biography }}</h4>
        </div>
    <div class="bnt_class">
        <button type="button" class="green_button_app">
        <a href="{{ route('newticketdoc') }}">Шаг назад</a>
        </button>
        <button type="button" class="green_button_app">
        <a href="{{ route('appoinment') }}">К записи</a>
        </button>
    </div>
        <hr/>
            @endforeach
    </div>
</div>
              
@endsection     


