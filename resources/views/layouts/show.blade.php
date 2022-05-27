@extends('layouts.layout')

@section('title_content')
{{ $element->name }}
@endsection

@section('content_1')

<div class="pull-right">
            <a class="gray_button_app" href="{{ route('ticket') }}"> Back</a>
        </div>

    <h1>{{ $element->name }}</h1>
    <h5>yes</h5>

        <div class="alert alert-info">
            <h3>Phone:{{ $element->phone }}</h3>
            <p><small>Date:{{ $element->created_at }}</small></p>
        </div>
</div>
@endsection
