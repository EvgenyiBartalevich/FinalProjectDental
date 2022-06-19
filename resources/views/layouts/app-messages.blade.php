@extends('layouts.layout')

@section('title_content')
Appoinment_online
@endsection

@section('content_1')

<div class="pull-right">
    @include('inc.message')
</div>
    <h1>Ваш онлайн талон</h1>
    <p>Будем рады видеть вас!<p>

@foreach($data as $element)
    <div class="alert alert-info">
        <table>
            <h3>Личные данные</h3>
            <thead>
                <tr>
                    <th><h3>Имя</h3></th>
                    <th><h3>Телефон</h3></th>
                    <th><h3>Email</h3></th>
                    <th><h3>Пол</h3></th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><h3>{{ $element->name }}</h3></td>
                    <td><h3>{{ $element->phone }}</h3></td>
                    <td><h3>{{ $element->email }}</h3></td>
                    <td><h3>{{ $element->gender }}</h3></td>
                </tr>
            </tbody>
        </table>
        <table>
            <h3>Данные записи</h3>
            <thead>
                <tr>
                    <th><h3>Отделение</h3></th>
                    <th><h3>Доктор</h3></th>
                    <th><h3>Дата</h3></th>
                    <th><h3>Время</h3></th>
                    <th><h3>Примечание</h3></th>
                    <th><p>info</p></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><h3>{{ $element->deparment }}</h3></td>
                    <td><h3>{{ $element->doc }}</h3></td>
                    <td><h3>{{ $element->date }}</h3></td>
                    <td><h3>{{ $element->time }}</h3></td>
                    <td><h3>{{ $element->comment }}</h3></td>
                    <td><p>{{ $element->created_at }}</p></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="pull-right">
    <a href="{{ route('appoinment_data_detail', $element->id) }}"><button class="gray_button_app">Детальнее</button></a>
    <a href="{{ route('appoinment_data_update', $element->id) }}"><button class="green_button_app">Обновить</button></a>
    <a href="{{ route('appoinment_add_delete', $element->id) }}"><button class="red_button_app">Удалить</button></a>
    </div>
    
@endforeach

<div class="class_back">
    <a class="gray_button_app" href="{{ route('ticket') }}">Назад</a>
</div>

@endsection
