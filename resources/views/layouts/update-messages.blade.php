@extends('layouts.layout')

@section('title_content_app')
Appoinment Update
@endsection

@section('content_1')

<div class="app_container">
    <div class="text_app_container">
    
    @include('inc.message')

            <div class="pull-right">
                <a class="gray_button_app" href="{{ route('appoinment_data') }}"> Назад</a>
            </div>
        <h2>Обновление данных</h2>
            </div>
                <div class="wrap_app_container">

                    <form method="POST" action="{{ route('appoinment_add_update', $data->id) }}">

                        @csrf

                        <h2>Личные данные</h2>
                            <p><strong>Ваше имя *:</strong></p>
                            <input type="text" id="name" name="name" value="{{ $data->name }}" placeholder="Ваше имя *">

                        
                        <p><strong>Ваш номер телефона *:</strong></p>
                        <input type="text" id="phone" name="phone" value="{{ $data->phone }}" placeholder="тел. *">

                        <p><strong>Ваш email :</strong></p>
                            <input type="text" id="email" name="email" value="{{ $data->email }}" placeholder="Email *">

                            <p><strong>Выбор отделения: *:</strong></p>
                        <p><strong> 
                        </strong></p>
                        <p><select name="deparment" id="deparment">
                            <option value="">{{ $data->deparment }}</option>
                            <option value="Терапевтическое">Терапевтическое</option>
                            <option value="Ортопедическое">Ортопедическое</option>
                            <option value="Хирургическое">Хирургическое</option>
                            <option value="Детское">Детское</option>
                            </select></p>

                            <p><strong>Выбор лечищего врача: *:</strong></p>
                        <p><strong>
                        </strong></p>
                        
                            <p><select name="doc" id="doc">
                            <optgroup label="Терапевтическое">
                            <option value="">{{ $data->doc }}</option>
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
                            <option value="">{{ $data->gender }}</option>
                            <option value="Mужской">Mужской</option>
                            <option value="Женский">Женский</option>
                            </select></p>

                            <p><strong>Выбрать дату/время: *:</strong></p>
                            <input type="date" name="date" id="date" value="{{ $data->date }}" placeholder="Дата *">
                            <p><input type="time" name="time" value="{{ $data->time }}" id="time" placeholder="Время *"></p>

                            <p><strong>Примечания:</strong></p>
                            <p><textarea name="comment" id="comment" placeholder="Примечание..">{{ $data->comment }}</textarea></p>

                            <button class="button_submit" type="submit" ><span>Update</span></button>
                        </form>

@endsection     