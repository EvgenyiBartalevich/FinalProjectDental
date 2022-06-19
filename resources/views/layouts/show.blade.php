@extends('layouts.layout')

@section('title_content')
{{ $element->name }}
@endsection

@section('content_1')

<div class="pull-right">
            <a class="gray_button_app" href="{{ route('ticket') }}"> Назад</a>
        </div>

    <h1>{{ $element->name }}</h1>
    <h5>Да</h5>

        <div class="alert alert-info">
            <h3>Телефон: </h3><h2>{{ $element->phone }}</h2>
            <p><small>Дата: {{ $element->created_at }}</small></p>
        </div>
</div>
@endsection
