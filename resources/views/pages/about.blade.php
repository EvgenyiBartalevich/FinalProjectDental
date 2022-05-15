@extends('layouts.layout')

@section('title_content')
About
@endsection

@section('content')



<div class="nav_general_box">
    <a href="{{ url('/') }}">home</a>
    <div class="nav_div">></div>
    <span>About</span>
</div>

    <main class="">
            <div class="">
                <h3>FAMILY DENTISTRY CENTER</h3>
		        <h6>This is a team of professionals, in love with their work, capable of solving a wide variety of patient problems from professional teeth cleaning and treatment of ordinary caries to serious surgical interventions and implantation.</h6>
                    </div>
                        <div class="">
                            <img src="{{asset('image/about_foto2.jpg')}}" class="about_image_1" alt="image">
                                </div>
                                    <button class="button"><a href="{{ url('/appoinment') }}">Make an appointment</a></button>
                                        </main>
                                    


@endsection     