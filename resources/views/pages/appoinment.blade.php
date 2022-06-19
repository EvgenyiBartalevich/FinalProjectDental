@extends('layouts.layout')

@section('title_content')
Заказ талона
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Заказ талона</span>
</div>

<div class="app_container">
    <div class="text_app_container">
    
    @include('inc.message')

        <h2>запись на прием</h2>
        <p>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот без инфекций, травм и других проблем.</p>
        <h5>Заказ талона</h5>
            </div>
                <div class="wrap_app_container">
                    <form method="POST" action="{{ route('appoinment_form') }}">

                        @csrf

                        <h2>Личные данные</h2>
                        <div class="img_doc_class">
                            <img src="{{asset('image/user_icon.png')}}" width="300px" alt="doc">
                        </div>
                            <p><strong>Ваше имя *:</strong></p>
                            <input type="text" id="name" name="name" placeholder="Ваше имя *">

                        
                        <p><strong>Ваш номер телефона *:</strong></p>
                        <input type="text" id="phone" name="phone" placeholder="тел. *">

                        <p><strong>Ваш email :</strong></p>
                            <input type="text" id="email" name="email" placeholder="Email *">

                            <p><strong>Выбор отделения: *:</strong></p>
                            <div class="img_doc_class">
                                <img src="{{asset('image/dep_icon.png')}}" width="300px" alt="doc">
                            </div>
                        <p><strong> 
                            <a href="{{ route('newticket') }}">
                            <button type="button" class="green_button_app">Выбор отделения</button>
                            </a>
                        </strong></p>
                        <p><select name="deparment" id="deparment">
                            <option value=""></option>
                            <option value="Терапевтическое">Терапевтическое</option>
                            <option value="Ортопедическое">Ортопедическое</option>
                            <option value="Хирургическое">Хирургическое</option>
                            <option value="Детское">Детское</option>
                            </select></p>

                            <p><strong>Выбор лечищего врача: *:</strong></p>
                            <div class="img_doc_class">
                                <img src="{{asset('image/show_doc_1.png')}}" width="300px" alt="doc">
                            </div>
                        <p><strong>
                            <a href="{{ route('newticketdoc') }}">
                                <button type="button" class="green_button_app">Выбрать специалиста</button>
                            </a>
                        </strong></p>
                        
                            <p><select name="doc" id="doc">
                            <optgroup label="Терапевтическое">
                            <option value=""></option>
                            <option value="Жанна Петровна Березкина">Жанна Петровна Березкина</option>
                            <option value="Владимир Иванович Гроза">Владимир Иванович Гроза</option>
                            <option value="Раиса Александровна Туманова">Раиса Александровна Туманова</option>
                            </optgroup>

                            <optgroup label="Ортопедическое">
                            <option value=""></option>
                            <option value="Тимур Иванович Хайдаров">Тимур Иванович Хайдаров</option>
                            <option value="Анна Михайловна Курочкина">Анна Михайловна Курочкина</option>
                            <option value="Степан Антонович Швед">Степан Антонович Швед</option>
                            </optgroup>

                            <optgroup label="Хирургическое">
                            <option value=""></option>
                            <option value="Тимур Иванович Хайдаров">Григорий Федорович Стекловар</option>
                            <option value="Анна Михайловна Курочкина">Евгений Борисович Минский</option>
                            <option value="Юрий Николаевич Мышкин">Юрий Николаевич Мышкин</option>
                            </optgroup>

                            <optgroup label="Детское">
                            <option value=""></option>
                            <option value="Владимир Иванович Гроза">Владимир Иванович Гроза</option>
                            <option value="Григорий Федорович Стекловар">Григорий Федорович Стекловар</option>
                            <option value="Евгений Борисович Минский">Евгений Борисович Минский</option>
                            </optgroup>

                        </select></p>

                            <p><strong>Укажите пол: *</strong></p>
                            <p><select name="gender" id="пол">
                            <option value=""></option>
                            <option value="Mужской">Mужской</option>
                            <option value="Женский">Женский</option>
                            </select></p>

                            <p><strong>Выбрать дату/время: *:</strong></p>
                            <div class="img_doc_class">
                                <img src="{{asset('image/time_icon.png')}}" width="300px" alt="doc">
                            </div>
                            <input type="date" name="date" id="date" placeholder="Дата *">
                            <p><input type="time" name="time" id="time" placeholder="Время *"></p>

                            <p><strong>Примечания: </strong></p>
                            <p><textarea name="comment" id="comment" placeholder="Примечание.."></textarea></p>

                            <button class="button_submit" type="submit" ><span>Заказать талон</span></button>
                        </form>
                    </div>
                </div>
@endsection     