@extends('layouts.layout')

@section('title_content')
Contact Up
@endsection

@section('content')

<div class="nav_general_box">
    <a href="{{ url('/') }}">home</a>
    <div class="nav_div">></div>
    <span>Contacts</span>
</div>

<div class="contacts_container">
    <div class="content_contacts">
        <h1>Contact details</h1>
        <div class="phone_box">
            <img src="{{asset('image/logo.png')}}"  class="" alt="logo">
            <p>+375 (29) 111 00 00</p></br> 
            <p>+375 (33) 111 00 00</p></br>
            <p>+375 (44) 111 00 00</p>
                </div>
                <div class="address_box">
                    <img src="{{asset('image/logo.png')}}"  class="" alt="logo">
                    <p>Address : Minsk, Bartalevich avenue, 23</p>
                        </div>
                            <div class="email_box">
                                <img src="{{asset('image/logo.png')}}"  class="" alt="logo">
                                <p>E-mail: info@dental-clinic.by</br>
                                    Skype: dental_by</p>
                                        </div>
                                            <div class="time_box">
                                                <img src="{{asset('image/logo.png')}}"  class="" alt="logo">
                                                <p>Mon-Fri: 9:00 - 21:00</br>
                                                Saturday: 9:00 - 16:00</br>
                                                Sunday - day off</p>
                                                    </div>

                                                    <button class="button"><a href="{{ url('/appoinment') }}">Make an appointment</a></button>
                                                        </div>
                                                            </div>

@endsection     