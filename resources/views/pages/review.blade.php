@extends('layouts.layout')

@section('title_content')
Отзывы
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">Главная</a>
    <div class="nav_div">></div>
    <span>Отзывы</span>
</div>

<section class="section_reviews_container">
	<div class="reviews_container">
		<h1>Отзывы наших пациентов</h1>
		<p>Будем признательны за Ваш отзыв о Нашей клинике!</p>
	<div class="messages_error_home">
		@include('inc.message')
	</div>
            <div class="form_wrapper">
				<form method="POST" class="add_review" action="{{ route('review_data') }}">

				@csrf

				<p><input type="text" name="name" id="name" class="review_input" placeholder="имя"></p>
				<p><input type="text" name="email" id="email"  class="review_input" placeholder="email"></p>
            	<p><textarea name="message" id="message" cols="40" rows="2.5" placeholder="отзыв" ></textarea></p>
            	<p><input type="submit" class="button_submit" value="Опубликовать"></p>
            	</form>
			</div>             	                                  
        <div class="image_reviews">
        	@foreach($reviews as $el)
            <div class="box_image_reviews">
				<img src="{{asset('image/user_guost.png')}}" alt="image">
             		<div class="icon_box_review_3">
						<h2>{{ $el->name }}</h2>
						<p>{{ $el->email }}</p>
						<p>{{ $el->message }}</p>
                    </div>
			</div>
	@endforeach
		</div>
	</div>
</section>
@endsection

