@extends('layouts.layout')

@section('title_content')
О нас
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главна</a>
    <div class="nav_div">></div>
    <span>О нас</span>
</div>
    <main class="main_about_container">
        <div class="content_about">
            @foreach($data as $el)
            <h2>{{ $el->title }}</h2>
            <h5>{{ $el->subject }}</h5>
        <div class="about_container">
		    <span><img src="{{asset('image/about_foto2.jpg')}}" class="about_image_page" alt="image">{{ $el->content }}
            <img src="{{asset('image/about_foto.jpg')}}" class="about_image_page_1" alt="image">{{ $el->content }}
            </span>
             @endforeach
        </div>
            <div class="gallary_list">
                <img src="{{asset('image/img_1.png')}}">
                <img src="{{asset('image/img_2.jpg')}}">
                <img src="{{asset('image/img_3.jpg')}}">
            </div>
        </div>
    </main>
        <button class="button_about">
            <a href="{{ route('appoinment') }}">заказать</br>талон</a>
        </button>
                                    
@endsection     
