@extends('layouts.layout')

@section('title_content')
Appoinment
@endsection

@section('content')

<div class="nav_general_box">
    <a href="{{ url('/') }}">home</a>
    <div class="nav_div">></div>
    <span>Appoinment</span>
</div>

<div class="app_container">
    <div class="text_app_container">
        <h2>make an appointment</h2>
        <p>Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth free of infections, injuries and other problems with.</p>
        <h5>appointment</h5>
            </div>
            <div class="form_app_container">
            <form method="POST" action="#">
                <label>Your name :</label></br>
                <input required type="text" id="name" name="name2" placeholder="Yuor name *"> <Br>
                <label>Your phone number :</label></br>
                <input required type="text" id="phone" name="phone2" placeholder="Phone *"> <Br>
                <label>Deparment *:</label></br>
                <input required type="radio" id="deparment" name="deparment2" placeholder="Deparment *"> Therapeutic<Br>
                <input required type="radio" id="deparment1" name="deparment2"> Orthopedic<Br>
                <input required type="radio" id="deparment2" name="deparment2"> Surgical<Br>
                <input required type="radio" id="deparment3" name="deparment2"> Сhildren's</p>
                <label>Your gender *:</label></br>
                <input required type="radio" id="gender" name="gender1"> Male<Br>
                <input required type="radio" id="gender2" name="gender1"> Female<Br>
                <label>Your email :</label></br>
                <input required type="text" id="email" name="email2" placeholder="Email *"> <Br>
                <label>Select a date :</label></br>
                <input required type="date" id="date" name="date2" placeholder="Date *"> <Br>

                <input type="submit" value="Send">
                <input type="reset" value="Clear">
            </form>

            </div>
                </div>

@endsection     