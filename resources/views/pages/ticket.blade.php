@extends('layouts.layout')

@section('title_content')
Online Ticket
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">home</a>
    <div class="nav_div">></div>
    <span>Ticket</span>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1> {{ Auth::user()->name }}, Welcome to personal account!</br>
                    Today {{ date('d-m-Y') }}
                </h1>
            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="messages_info"> @include('inc.message') </div>
                    
                    <button type="button" class="button_app_ticket"><a href="{{ route('free_data') }}" class="button_app_ticket_a">Show</a></button>
                    <button type="button" class="button_app_ticket"><a href="{{ route('appoinment_data') }}" class="button_app_ticket_a" >Appoinment</a></button>
                </div>
            </div>
        </div>
    </div>

@endsection