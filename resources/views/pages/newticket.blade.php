@extends('layouts.layout')

@section('title_content')
Новый талон
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Выбор отделения</span>
</div>
    <h1>Заказ талона</h1>
    <h2>выбор отделения</h2>
        <div class="container_content">
            <div class="img_doc_class">
                <img src="{{asset('image/show_doc.png')}}" width="420px" alt="doc">
            </div>
        <div class="list_content">
            <ui>
                <li><div class="list_class"><a href="{{ route('newticket_showt') }}">Терапия</a></div></li>
                <li><div class="list_class"><a href="{{ route('newticket_showx') }}">Хирургия</a></div></li>
                <li><div class="list_class"><a href="{{ route('newticket_showo') }}">Ортопедия</a></div></li>
                <li><div class="list_class"><a href="{{ route('newticket_showd') }}">Детское</a></div></li>
            </ui>
        </div>
    </div>
   
                                    
@endsection     


