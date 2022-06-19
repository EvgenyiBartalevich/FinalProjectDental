@extends('layouts.layout')

@section('title_content')
Contact Up
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Контакты</span>
</div>
    <div class="wrap_contacts_container">
        <div class="h1">
            <h1>Контактная информация</h1>
            <p>Мы всегда на связи и ответим на ваше сообщение в течение двух часов! Мы будем рады помочь Вам!</p>
                </div>
                    <div class="content_contacts_page"> 
                        <div class="wrap_class_row">
                            <div class="class_phone">
                                <h2><img src="{{asset('image/ico_phone.png')}}" alt="logo_phone">Телефон приемной:</h2>
                                +375 (29) <span>505 43 95</span><br/>
                                <h2><img src="{{asset('image/ico_phone.png')}}" alt="logo_phone">Регистратура:</h2>
                                +375 (33) <span>111 22 33</span><br/>
                                +375 (44) <span>111 77 11</span>
                            </div>
                                <div class="class_address">
                                    <h2>Будем ждать Вас по адресу:</h2>
                                    <p><img src="{{asset('image/ico_location.png')}}" alt="logo_addres">Адрес: Минск, Большой проспект, д.23</p>
                                </div>
                        </div>
                        <div class="wrap_class_row2">
                            <div class="class_email">
                                <h2><img src="{{asset('image/ico_email.png')}}" alt="logo_email">Email: </h2>
                                <p>dental@smile.com</p>
                            </div>
                                <div class="class_time">
                                    <h2><img src="{{asset('image/ico_date.png')}}" alt="logo_t">Рабочее время:</h2>
                                    <h3>Пн.-Пт.:</h3> <span>9:00 - 21:00</span><br/>
                                    <h3>Суббота:</h3><span>10:00 - 18:00</span><br/>
                                    <h3>Воскресение - </h3><span>Выходной</span>
                                </div>
                        </div>
                    </div>
                </div>
    <div class="btn_contacts">
        <button class="button"><a href="{{ route('appoinment') }}">заказать талон</a></button>
    </div>


@endsection     
