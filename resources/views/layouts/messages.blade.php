@extends('layouts.layout')

@section('title_content')
Запись онлайн
@endsection

@section('content_1')

<div class=" container">
    <h1>Бесплатная консультация</h1>
    <h5>С вами свяжутся в ближайшее время!</h5>

@foreach($data as $element)
    <div class="alert_info">
        <table>
            <thead>
                <tr>
                    <th><h3>Имя</h3></th>
                    <th><h3>Телефон</h3></th>
                    <th><h3>Email</h3></th>
                    <th><p>Дата и время заявки</p></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><h3>{{ $element->name }}</h3></td>
                    <td><h3>{{ $element->phone }}</h3></td>
                    <td><h3>{{ $element->email }}</h3></td>
                    <td><p>{{ $element->created_at }}</p></td>
                </tr>
            </tbody>
        </table>

        <div class="delete_but">
            <a href="{{ route('free_delete', $element->id) }}">
                <button class="red_button_app">Удалить</button>
            </a>
        </div>
@endforeach
</div>
    <div class="pull-right">
        <a class="gray_button_app" href="{{ route('ticket') }}"> Назад</a>
    </div>
@endsection
