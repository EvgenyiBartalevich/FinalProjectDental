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
    
    @include('inc.message')

        <h2>make an appoinment</h2>
        <p>Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth free of infections, injuries and other problems with.</p>
        <h5>Sign up online</h5>
            </div>
                <div class="wrap_app_container">
                    <form method="POST" action="{{ route('appoinment_form') }}">

                        @csrf
                    
                        <p><strong>Your name *:</strong></p>
                        <input type="text" id="name" name="name" placeholder="Yuor name *">

                        
                        <p><strong>Your phone number *:</strong></p>
                        <input type="text" id="phone" name="phone" placeholder="Phone *">

                        <p><strong>Your email :</strong></p>
                            <input type="text" id="email" name="email" placeholder="Email *">

                        <p><strong>Сhoose a department *:</strong></p>
                        <p><select name="deparment" id="deparment">
                            <option value=""></option>
                            <option value="Therapeutic">Therapeutic</option>
                            <option value="Orthopedic">Orthopedic</option>
                            <option value="Surgical">Surgical</option>
                            <option value="Сhildrens">Сhildren's</option>
                            </select></p>

                            <p><strong>Сhoose a doctor *:</strong></p>
                            <p><select name="doc" id="doc">
                            <optgroup label="Therapeutic">
                            <option value=""></option>
                            <option value="Frank J. Aard">Frank J. Aard</option>
                            <option value="Aash Aaron">Aash Aaron</option>
                            <option value="Quinton Aaron">Quinton Aaron</option>
                            </optgroup>

                            <optgroup label="Orthopedic">
                            <option value=""></option>
                            <option value="Barkhad Abdi">Barkhad Abdi</option>
                            <option value="Kareem Abdul-Jabbar">Kareem Abdul-Jabbar</option>
                            <option value="Tim Abell">Tim Abell</option>
                            </optgroup>

                            <optgroup label="Surgical">
                            <option value=""></option>
                            <option value="Walter Abel">Walter Abel</option>
                            <option value="Austin Abrams">Austin Abrams</option>
                            <option value="Jim Abrahams">Jim Abrahams</option>
                            </optgroup>

                            <optgroup label="Сhildren's">
                            <option value=""></option>
                            <option value="Ray Abruzzo">Ray Abruzzo</option>
                            <option value="Frankie Avalon">Frankie Avalon</option>
                            <option value="Erick Avari">Erick Avari</option>
                            </optgroup>

                        </select></p>

                            <p><strong>Your gender *</strong></p>
                            <p><select name="gender" id="gender">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select></p>

                            <p><strong>Select a date *:</strong></p>
                            <input type="date" name="date" id="date" placeholder="Date *">

                            <p><strong>Select a time *:</strong></p>
                            <p><select name="time" id="time">
                            <option value=""></option>
                            <option value="even days: 8.00 - 13.30">Even days: 8.00 - 13.30</option>
                            <option value="odd days: 14.00 - 19.30">Odd days: 14.00 - 19.30</option>
                            </select></p>

                            <p><strong>Notes :</strong></p>
                            <p><textarea name="comment" id="comment" placeholder="Add to comment.."></textarea></p>

                            <button class="button_submit" type="submit" ><span>Order online</span></button>
                            <button class="button_reset"type="reset"><span>Clear</span></button>
                        </form>
                    </div>
                </div>
@endsection     