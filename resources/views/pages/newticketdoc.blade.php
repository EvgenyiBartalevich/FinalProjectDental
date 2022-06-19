@extends('layouts.layout')

@section('title_content')
Новый талон
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Выбор специалиста</span>
</div>
    <h1>Заказ талона</h1>
    <h2>выбор специалиста</h2>
        <div class="container_content">
            <div class="img_doc_class">
                <img class="img_imgclass" src="{{asset('image/doc_img_2.jpg')}}" alt="doc">
            </div>
<div class="list_content">
    <ui>
        <li><div class="list_class"><a href="{{ route('newticket_showt_doctor') }}">Специалисты Терапии</a></div></li>
        <li><div class="list_class"><a href="{{ route('newticket_showx_doctor') }}">Специалисты Хирургии</a></div></li>
        <li><div class="list_class"><a href="{{ route('newticket_showo_doctor') }}">Специалисты Ортопедии</a></div></li>
        <li><div class="list_class"><a href="{{ route('newticket_showd_doctor') }}">Детское отделение</a></div></li>
    </ui>
</div></div>
   
                                    
@endsection     


