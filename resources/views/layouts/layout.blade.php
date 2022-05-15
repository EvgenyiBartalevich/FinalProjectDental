@extends('layouts.index')

@section('title_content')
Dental
@endsection

@section('content')

<header class="header_container">
    <div class="promo">
        <h1>We Care About Your Dental Health.</h1>
		<p>Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth, free of infections, injuries and other problems .</p>
            <form class="form_promo">
                <button class="button"><a href="{{ url('/appoinment') }}">Make an</br> appointment</a></button>
            </form>
    </div>
        <div class="promo_image"><img src="{{asset('image/fon_1.png')}}" class="promo_image_1" alt="image"></div>
</header>

    <main class="main_container">
        <div class="about_image">
            <img src="{{asset('image/foto_doc.png')}}" alt="image_doc">
                </div>
                    <div class="main_wrap_container">
                        <div class="about">
                            <h3>Best Dental Clinic You Can Trust.</h3>
		                    <h6>Dental ipsum dolor sit amet, consectetur adipiscing elit. Molesed erat tortor quis. Enim id lobortis massa egestas tortor ac ultrices semper.</h6>
                                <div class="wrap_about_container">
                                    <div class="about_box_content">
                                                <h5>Complete Dental Care</h5>
                                                <p>Clinic dental sit amet, consect etur adipiscing elit cursus.</p>
                                                    </div>
                                                        <div class="about_box_content">
                                                            <h5>Affordable Price</h5>
                                                            <p>Doctor clinic dental sit amet, consect etur adipiscing elit cursus.</p>
                                                                </div>
                                                                    </div>
                                                                        </div>
                                                                            </div>
                                                                                </main>

<section class="dental_services">
	<div class="dental_container">
        <div class="dental_services_container">
			<h1>Our Dental Services</h1>
			<p>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth, free of infections, injuries and other problems with.</p>
		        </div>
			        <div class="img-container">
				        <div class="box_1">
					        <img src="{{asset('image/icon_3.png')}}" class="icon_zub" alt="image">
					        <h2>Teeth Checkup</h2>
					        <p>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth, free of infections</p>
				                </div>
				                    <div class="box_2">
					                    <img src="{{asset('image/icon_2.png')}}"  class="icon_zub" alt="image">
					                    <h2>Dental Crown</h2>
					                    <p>Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth, free of infections.</p>
				                            </div>
				                                <div class="box_3">
					                                <img src="{{asset('image/icon_1.png')}}"  class="icon_zub" alt="image">
					                                <h2>Teeth Implant</h2>
					                                <p>Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth, free of infections.</p>
				                                        </div>
			                                                </div>
	                                                            </section>

    <section class="team_professionals">
		<div class="section_team_professionals">
			<h1>Team Of Professionals</h1><br>
				<p>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth free of infections, injuries and other problems with.</p>
					<div class="image_doc">
						<div class="box_image_doc">
							<img src="{{asset('image/doc_1.png')}}" alt="image">
                                <div class="icon_box">
                                    <h2><a href="{{ route('register') }}">Dr.Rana Gray</a></h2>
							        <p>Therapist-stomatologist</p>
                                        </div>
								            </div>
								                <div class="box_image_doc_1">
									                <img src="{{asset('image/doc_2.png')}}" alt="image">
                                                        <div class="icon_box_2">
									                        <h2><a href="{{ route('register') }}">Dr.John Roy</a></h2>
									                        <p>Dentist</p>
                                                                </div>
								                                    </div>
								                                        <div class="box_image_doc_2">
									                                        <img src="{{asset('image/doc_3.png')}}" alt="image">
                                                                                <div class="icon_box_3">
									                                                <h2><a href="{{ route('register') }}">Dr.Michel King</a></h2>
									                                                <p>Dental surgeon</p>
                                                                                        </div>
								                                                            </div>	
							                                                                    </div>
				                                                                                    </div>
	                                                                                                    </section>
<section class="number_section">
    <div class="number_box">
        <h1>20</h1>
        <span>course published</span>
            </div>
                <div class="number_box_1">
                    <h1>120</h1>
                    <span>qualified staff</span>
                        </div>
                            <div class="number_box_2">
                                <h1>550</h1>
                                <span>happy patient</span>
                                    </div>
                                        <div class="number_box_3">
                                            <h1>20</h1>
                                            <span>years of experience</span>
                                                </div>
                                                    </section>
    
<section class="section_steps_container">
        <div class="image_steps_box">
            <img src="{{asset('image/doc_steps.png')}}" alt="image_doc">
                </div>
                    <div class="header_steps_container">
                        <h3>easy steps</h3>
		                    <h6>Dental clinic sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</h6>
                                </div>
                                    <div class="content_steps_box">
                                        <h5><span>1.</span>select your yoctor</h5>
                                        <p>Clinic dental sit amet, consect etur adipiscing elit cursus.</p>
                                            </div>
                                                <div class="content_steps_box">
                                                    <h5><span>2.</span>make an appoinment</h5>
                                                    <p>Doctor clinic dental sit amet, consect etur adipiscing elit cursus.</p>
                                                        </div>
                                                            <div class="content_steps_box">
                                                                <h5><span>3.</span>meet your doctor</h5>
                                                                <p>Dental clinic doctor sit amet, consect etur adipiscing elit cursus.</p>
                                                                    </div>
                                                                        </section>
    
<section class="section_consultation">
    <div class="consultation_box">
        <h1>free consultation</h1>
        <span>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​Dental or oral health is concerned with your teeth, gums and mouth. healthy mouth free of infections, injuries and other problems.</span>
            </div>
                <div class="form_box">
                    <form mathod="POST">
			            <input type="text"  name="name" placeholder="Your name *">
			            <input type="tel" name="phon"  placeholder="Your phone number *"> 
			            <input class="button_free" type="submit" value="Sign Up">
                    </form>
                </div>
            </section>


@endsection