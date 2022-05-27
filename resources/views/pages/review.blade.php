@extends('layouts.layout')

@section('title_content')
Review
@endsection

@section('content_1')

<div class="nav_general_box">
    <a href="{{ route('/') }}">home</a>
    <div class="nav_div">></div>
    <span>Reviews</span>
</div>

<section class="section_reviews_container">
	<div class="reviews_container">
		<h1>Reviews From Our Patient.</h1>
			<p>We believe that focus and our associated programs are most instrumental in reducing readmissions and managing.</p>
            <div class="form_wrapper">
				<form method="POST" class="add_review">
				<p><input type="text" name="name"  class="review_input" placeholder="Name.."></p>
            	<p><textarea name="comment" cols="50" rows="2.5" placeholder="Add to review.." ></textarea></p>
            	<p><input type="submit" class="button_submit" value="Publication"></p>
            	<p><input type="reset" class="button_reset" value="Сlear"></p>
            	</form>
			</div>
				<div class="image_reviews">
					<div class="box_image_reviews">
						<img src="{{asset('image/reviews_logo3.png')}}" alt="image">
                            <div class="icon_box_review">
                                    <h2>Andrew Wolf</h2>
							        <p>Lorem ipsum dolor sit amet, consec adipis. Cursus ultricies sit sit ultricies sit sit dolo</p>
                                        </div>
								            </div>
								                <div class="box_image_reviews">
									                <img src="{{asset('image/reviews_logo2.png')}}" alt="image">
                                                        <div class="icon_box_review_2">
									                        <h2>Anna Fox</h2>
									                        <p>Lorem ipsum dolor sit amet, consec adipis. Cursus ultricies sit sit ultricies sit sit dolo</p>
                                                                </div>
								                                    </div>
								                                        <div class="box_image_reviews">
									                                        <img src="{{asset('image/reviews_logo1.png')}}" alt="image">
                                                                                <div class="icon_box_review_3">
									                                                <h2>Bella Smith</h2>
									                                                <p>Lorem ipsum dolor sit amet, consec adipis. Cursus ultricies sit sit ultricies sit sit dolo</p>
                                                                                        </div>
								                                                            </div>
                                                        	                                    </div>
                                                                                            <div class="image_reviews">
                                                                                        <div class="box_image_reviews">
									                                                <img src="{{asset('image/review_logo_4.jpg')}}" alt="image">
                                                                                <div class="icon_box_review_3">
									                                        <h2>Nick</h2>
									                                        <p>Text...</p>
                                                                        </div>
								                                    </div>
                                                                <div class="box_image_reviews">
									                        <img src="{{asset('image/review_logo_4.jpg')}}" alt="image">
                                                        <div class="icon_box_review_3">
									                <h2>Nick</h2>
									                <p>Text...</p>
                                                </div>
								            </div>
                                        <div class="box_image_reviews">
									<img src="{{asset('image/review_logo_4.jpg')}}" alt="image">
                                <div class="icon_box_review_3">
							<h2>Nick</h2>
							<p>Text...</p>
                        </div>
					</div>
                </div>
			</div>
	</section>
@endsection