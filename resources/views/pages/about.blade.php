@extends('layouts.layout')

@section('title_content')
About
@endsection

@section('content_1')



<div class="nav_general_box">
    <a href="{{ route('/') }}">home</a>
    <div class="nav_div">></div>
    <span>About</span>
</div>
    <main class="container">
            <div class="content_about">
                <h2>Family dentistry cente</h2>
                <h5>It is important to know</h5>
		        <p><img src="{{asset('image/about_foto2.jpg')}}" class="about_image_page" alt="image">This is a team of professionals, in love with their work, capable of solving a wide variety of patient problems from professional teeth cleaning and treatment of ordinary caries to serious surgical interventions and implantation. 
                    Attention from the staff, an individual approach to each patient, the latest Finnish equipment will make your visit to the Center more comfortable and productive. Perhaps there is not a single person who would not have to turn to the services of a dentist. Do you agree?
                Most patients, at least once a year, go on vacation, but do they take their children to the dentist at least once a year and do they go themselves? How is your family?
                    Men, as you know, do not go to doctors at all, or only when they are completely “pressed”. 
                Maybe it's different in your family?
                <img src="{{asset('image/about_foto.jpg')}}" class="about_image_page_1" alt="image">When planning the installation of crowns, each patient is faced with the difficulty of choosing the material for them. In this article, we will look at the features, benefits, method of installation, as well as the service life of such crowns. Veneers are thin linings on the teeth, the purpose of which is to restore the aesthetic appearance of the dentition. In this article, we will tell you how the process of installing veneers on the front teeth takes place. Molar prosthetics is a rather difficult task. The fact is that with such a procedure, the crown is usually attached to the supporting teeth, and in their absence, the operation becomes more complicated. Here you will learn about the types of dentures for chewing teeth.
                 The Hollywood smile is a modern fashion trend. And in order to get it, many go to all conceivable and unimaginable tricks, whiten the enamel with Korean gels, put veneers or even brighten their teeth in dentistry. In this article, we will look at how to whiten your teeth without harm, is it possible to do it at home and how to prolong the effect. Veneers are thin linings on the teeth, the purpose of which is to restore the aesthetic appearance of the dentition. In this article, we will tell you how the process of installing veneers on the front teeth takes place. Molar prosthetics is a rather difficult task. The fact is that with such a procedure, the crown is usually attached to the supporting teeth, and in their absence, the operation becomes more complicated. Here you will learn about the types of dentures for chewing teeth.</p>
                    </div>
                        </main>
                            <button class="button_about"><a href="{{ route('appoinment') }}">Make an appoinment</a></button>
                                    
@endsection     
