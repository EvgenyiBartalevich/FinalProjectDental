@extends('layouts.layout')

@section('title_content')
Delete
@endsection

@section('content_1')

<div class=" container">
    <h1>Бесплатная консультация</h1>
    <h5>Удаление записи!</h5>

@foreach($date as $element)
    <div class="alert alert-info">
        <h3>Имя: Удалить</h3>
        <h3>Телефон:{{ $element->phone }}</h3>
        <p>Дата:{{ $element->created_at }}</p>
<a href="{{ route('free_delete', $element->id) }}"><button class="btn btn-danger">Удалить</button></a>
</div>
@endforeach
</div>
@endsection
