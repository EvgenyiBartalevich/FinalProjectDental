@extends('layouts.layout')

@section('title_content')
Detail
@endsection

@section('content_1')

<div class="container">
    <h1>Online doctor appointment</h1>
    <h5>Hello, {{ $data->name }} ! </h5>
        <div class="alert alert-info">
            <strong>You have booked a doctor's appointment {{ $data->doc }}, department {{ $data->deparment }}. Date of your visit to us {{ $data->date }}. See you soon!</strong><p>{{ $data->created_at }}</p>
            </div>
                <div class="pull-right">
            <a class="gray_button_app" href="{{ route('appoinment_data') }}"> Back</a>
        </div>
</div>
@endsection
