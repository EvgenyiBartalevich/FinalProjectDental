@extends('layouts.layout')

@section('title_content')
Delete
@endsection

@section('content_1')

<div class=" container">
    <h1>Free Consultation</h1>
    <h5>Deleting an entry!</h5>

@foreach($date as $element)
    <div class="alert alert-info">
        <h3>Name: Delete</h3>
        <h3>Phone:{{ $element->phone }}</h3>
        <p>Date:{{ $element->created_at }}</p>
<a href="{{ route('free_delete', $element->id) }}"><button class="btn btn-danger">Delete</button></a>
</div>
@endforeach
</div>
@endsection
