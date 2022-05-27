@extends('layouts.layout')

@section('title_content')
Appoinment_online
@endsection

@section('content_1')

<div class="pull-right">
    @include('inc.message')

            <a class="gray_button_app" href="{{ route('ticket') }}"> Back</a>
        </div>

    <h1>Online doctor appointment</h1>
    <h5>We will be glad to see you!</h5>

@foreach($data as $element)
    <div class="alert alert-info">
        <h3>Name: </h3></hr><h2>{{ $element->name }}</h2>
        <h3>Phone: </h3><h2>{{ $element->phone }}</h2>
        <h3>email: </h3><h2>{{ $element->email }}</h2>
        <h3>deparment: </h3><h2>{{ $element->deparment }}</h2>
        <h3>doc: </h3><h2>{{ $element->doc }}</h2>
        <h3>gender: </h3><h2>{{ $element->gender }}</h2>
        <h3>date: </h3><h2>{{ $element->date }}</h2>
        <h3>time: </h3><h2>{{ $element->time }}</h2>
        <h3>comment: </h3><h2>{{ $element->comment }}</h2>
        <p>Date: {{ $element->created_at }}</p>
    </div>
    <div class="pull-right">
    <a href="{{ route('appoinment_data_detail', $element->id) }}"><button class="gray_button_app">Detail</button></a>
    <a href="{{ route('appoinment_data_update', $element->id) }}"><button class="green_button_app">Updata</button></a>
    <a href="{{ route('appoinment_add_delete', $element->id) }}"><button class="red_button_app">Delete</button></a>
    <hr/>
    </div>
    
@endforeach

@endsection
