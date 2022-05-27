@extends('layouts.layout')

@section('title_content')
Contact Up
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">home</a>
    <div class="nav_div">></div>
    <span>Contacts</span>
</div>
    <div class="wrap_contacts_container">
        <div class="h1">
            <h1>Contact details</h1>
            <p>We are always in touch and will answer your message within two hours! We will be happy to help you!</p>
                </div>
                    <div class="content_contacts_page"> 
                        <ul>
                            <li>
                                <p><img src="{{asset('image/ico_phone.png')}}"  class="" alt="logo">Phone:</p>
                                +375 (29) <strong>505 43 95</strong></br> 
                                +375 (33) <strong>111 22 33</strong></br>
                                +375 (44) <strong>111 77 11</strong>
                            </li>
                            <li><p><img src="{{asset('image/ico_location.png')}}"  class="" alt="logo">Address: Minsk, Big avenue, 23</p></li>
                            <li><p><img src="{{asset('image/ico_email.png')}}"  class="" alt="logo">Email:dental@smile.com</p></li>
                            <li><p><img src="{{asset('image/ico_date.png')}}"  class="" alt="logo">Working hours:</p></br>
                                Mon-Fri: <strong>9:00 - 21:00</strong></br>
                                Sat:<strong>10:00 - 18:00</strong></br>
                                Sunday -<strong>day off</strong>
                            </li>           
                        </ul>
                        <img src="{{asset('image/contacts_img.jpg')}}"  class="img_contacts" alt="logo">
                    </div>
                </div>
    <div class="btn_contacts">
        <button class="button"><a href="{{ route('appoinment') }}">Make an appointment</a></button>
    </div>


@endsection     
