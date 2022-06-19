@extends('layouts.index')

@section('title_content')
Dental
@endsection

@section('content_1')

<div class="messages_error_home">
@include('inc.message')
</div>

<header class="header_container">
    <div class="promo">
        <h1>Мы заботимся о здоровье ваших зубов</h1>
		<p>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот, без инфекций, травм и других проблем Виниры – это тонкие накладки на зубы, цель которых – восстановить эстетический вид зубного ряда. </p>
            <form class="form_promo">
                <button class="button"><a href="{{ route('appoinment') }}">заказать</br> талон</a></button>
            </form>
    </div>
        <div class="promo_image"><img src="{{asset('image/fon_1.png')}}" class="promo_image_1" alt="image"></div>
</header>

<section class="section_consultation">
<div class="form_box">
    <div class="consultation_box">
        <h1>бесплатная консультация</h1>
        <span>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. Здоровый рот без инфекций, травм и других проблем.</span>
            </div>
                <div class="wrap_form">
                    <form mathod="POST" action="{{ route('free_form') }}">
                
                        @csrf
			            <input type="text"  name="name" id="name" placeholder="Укажите имя *">
			            <input type="tel" name="phone" id="phone" placeholder="Укажите номер телефона *"> 
                        <button class="button_free" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
    </section>

    <main class="main_container">
        <div class="about_image">
            <img src="{{asset('image/foto_doc.png')}}" alt="image_doc">
                </div>
                    <div class="main_wrap_container">
                        <div class="about">
                            <h3>Cтоматология, которой можно доверять.</h3>
		                    <h6>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот без инфекций, травм и других проблем.</h6>
                                <div class="wrap_about_container">
                                    <div class="about_box_content">
                                                <h5>Полная стоматологическая помощь</h5>
                                                <p>Стоматологическая клиника сит амет, консект этур адиписц элит курсус.</p>
                                                    </div>
                                                        <div class="about_box_content">
                                                            <h5>Доступная цена</h5>
                                                            <p>Стоматологическая клиника доктора сит амет, консект этур адиписц элит курсус.</p>
                                                                </div>
                                                                    </div>
                                                                        </div>
                                                                            </div>
                                                                                </main>

<section class="dental_services">
	<div class="dental_container">
        <div class="dental_services_container">
			<h1>Наши </br>стоматологические услуги</h1>
			<p>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот, без инфекций, травм и других проблем.</p>
		        </div>
			        <div class="img-container">
				        <div class="box_1">
					        <img src="{{asset('image/dental_check.png')}}" class="icon_zub" alt="image">
					        <h2>Осмотр зубов</h2>
					        <p>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот, без инфекций</p>
				                </div>
				                    <div class="box_2">
					                    <img src="{{asset('image/dental_scaling.png')}}"  class="icon_zub" alt="image">
					                    <h2>Зубная корона</h2>
					                    <p>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот, без инфекций.</p>
				                            </div>
				                                <div class="box_3">
					                                <img src="{{asset('image/dental_fees.png')}}"  class="icon_zub" alt="image">
					                                <h2>Имплантат зубов</h2>
					                                <p>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот, без инфекций.</p>
				                                        </div>
			                                                </div>
	                                                            </section>

    <section class="team_professionals">
		<div class="section_team_professionals">
			<h1>Команда профессионалов</h1><br>
				<p>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот без инфекций, травм и других проблем.</p>
					<div class="image_doc">
						<div class="box_image_doc">
							<img src="{{asset('image/doc_1.png')}}" alt="image">
                                <div class="icon_box">
                                    <h2>Анна Курочкина</h2>
							        <p>Терапевт</p>
                                        </div>
								            </div>
								                <div class="box_image_doc_1">
									                <img src="{{asset('image/doc_img_1.jpg')}}" alt="image">
                                                        <div class="icon_box_2">
									                        <h2>Раиса Туманова</h2>
									                        <p>Ортопед</p>
                                                        </div>
								                    </div>
								                <div class="box_image_doc_2">
									        <img src="{{asset('image/doc_3.png')}}" alt="image">
                                        <div class="icon_box_3">
									<h2>Тимур Хайдаров</h2>
								<p>Хирург</p>
                            </div>
						</div>	
					</div>
				</div>
	        </section>
    
<section class="section_steps_container">
        <div class="image_steps_box">
            <img src="{{asset('image/doc_2.png')}}" alt="image_doc">
                </div>
                    <div class="header_steps_container">
                        <h3>легкие шаги</h3>
		                    <h6>Здоровье зубов или полости рта связано с вашими зубами, деснами и ртом. здоровый рот без инфекций, травм и других проблем.</h6>
                                </div>
                                    <div class="content_steps_box">
                                        <h5>1. выберите своих врачей</h5>
                                        <p>Стоматологическая клиника сит амет, консект этур адиписц элит курсус.</p>
                                    </div>
                                <div class="content_steps_box">
                                    <h5>2. назначить встречу</h5>
                                    <p>Стоматологическая клиника доктора сит амет, консект этур адиписц элит курсус.</p>
                                </div>
                            <div class="content_steps_box">
                        <h5>3. познакомься со своим доктором</h5>
                    <p>Здоровье зубов или полости рта связано с вашими зубами</p>
                </div>
            </section>
                                                                    
<section class="number_section">
    <div class="number_box">
        <h1>20</h1>
        <span>курс опубликован</span>
            </div>
                <div class="number_box_1">
                    <h1>120</h1>
                    <span>опытный персонал</span>
                        </div>
                            <div class="number_box_2">
                                <h1>550</h1>
                                <span>Cчастливый  пациент</span>
                                    </div>
                                        <div class="number_box_3">
                                            <h1>20</h1>
                                            <span>Многолетный опыт</span>
                                                </div>
                                                    </section>
@endsection