@extends('layouts.layout')

@section('title_content')
Free Consultation
@endsection

@section('content_1')

<div class=" container">

    <h1>Free Consultation</h1>
    <h5>You will be contacted shortly!</h5>
    <div class="pull-right">
            <a class="gray_button_app" href="{{ route('ticket') }}"> Back</a>
        </div>

@foreach($data as $element)
    <div class="alert alert-info">
        <h3>Name: {{ $element->name }}</h3>
        <h3>Phone:{{ $element->phone }}</h3>
        <p>Date:{{ $element->created_at }}</p>
    </div>
    <a href="{{ route('free_delete', $element->id) }}"><button class="red_button_app">Delete</button></a>
@endforeach
</div>
@endsection
