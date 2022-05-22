@extends('layouts.layout')

@section('title_content')
Appoinment
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">home</a>
    <div class="nav_div">></div>
    <span>Appoinment</span>
</div>

<div class="app_container">
    <div class="text_app_container">
        <h2>make an appoinment</h2>
        <p>Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth free of infections, injuries and other problems with.</p>
        <h5>appointment</h5>
            </div>
@if ($errors->any())
    <div class="">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul></ul>
    </div>
@endif
                <div class="form_app_container">
                    <form method="POST" action="#">

                        @csrf
                        
                        <span>Your name :</span></br>
                        <input required type="text" id="name1" name="name" placeholder="Yuor name *"> <Br>

                        <span>Your phone number :</span></br>
                        <input required type="text" id="phone1" name="phone" placeholder="Phone *"> <Br>

                        <h1>Deparment *:</h1></br>
                        <h3>Therapeutic</h3>
                        <input required type="radio" value="yes" name="Therapeutic">Yes <Br>
                        <input required type="radio" value="no" name="Therapeutic"> No<Br>
                        <h3>Orthopedic</h3>
                        <input required type="radio" value="yes" name="Orthopedic">Yes <Br>
                        <input required type="radio" value="no" name="Orthopedic"> No<Br>
                        <h3>Surgical</h3>
                        <input required type="radio" value="yes" name="Surgical">Yes <Br>
                        <input required type="radio" value="no" name="Surgical"> No<Br>
                        <h3>Сhildren's</h3>
                        <input required type="radio" value="yes" name="Сhildren's">Yes <Br>
                        <input required type="radio" value="no" name="Сhildren's"> No<Br>
                      
                        <span>Your gender *</span></br>
                        <h3>Male:</h3>
                        <input required type="radio" value="yes" name="Male"> Yes<Br>
                        <input required type="radio" value="no" name="Male"> No<Br>
                        <h3>Female:</h3>
                        <input required type="radio" value="yes" name="Female"> Yes<Br>
                        <input required type="radio" value="no" name="Female"> No<Br>

                        <span>Your email :</span></br>
                        <input required type="text" id="email2" name="email" placeholder="Email *"> <Br>

                        <span>Select a date :</span></br>
                        <input required type="date" id="date2" name="date" placeholder="Date *"> <Br>

                        <span>Select a time :</span></br>
                        <input required type="time" id="time2" name="time" placeholder="Time *"> <Br>
                        <input type="submit" value="Send">
                        <input type="reset" value="Clear">
                    </form>
                </div>
            </div>
@endsection     