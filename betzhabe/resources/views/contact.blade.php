@extends('layout')

@section('style')
	<link rel="stylesheet" href="{{ asset('wish/styles/bootstrap4/bootstrap.min.css') }}" />		
	<link href="{{ asset('wish/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('wish/styles/contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('wish/styles/contact_responsive.css') }}">
@endsection

@section('content')
<div class="super_container">
	<!-- Header -->
	
	@include('header')

	<!-- Menu -->

	@include('menu')

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('wish/images/contact_b2.png') }}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map  style="display:none" -->
		
	<div class="map" style="display:none">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>
	
	<!-- Contact Form -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="review_form_container">
						<div class="review_form_title">Contacto</div>
						<div class="review_form_content">
							<form action="#" id="review_form" class="review_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<input type="name" class="review_form_input" placeholder="Nombre" required="required">
									<input type="email" class="review_form_input" placeholder="E-mail" required="required">
									<input type="text" class="review_form_input" placeholder="Asunto">
								</div>
								<textarea class="review_form_text" name="review_form_text" placeholder="Mensaje"></textarea>
								<button type="submit" class="review_form_button">Enviar Mensaje</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Text -->

	<div class="contact_text">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-5">

					<div class="contact_info">
						<div class="contact_title">Info contacto</div>
						<div class="contact_info_content">
							<ul>
								<!--<li>
									<div class="contact_info_icon"><img src="{{ asset('wish/images/contact_info_1.png') }}" alt=""></div>
									<div class="contact_info_text">Rosia Road, no67, Gibraltar UK</div>
								</li>-->
								<li>
									<div class="contact_info_icon"><img src="{{ asset('wish/images/contact_info_2.png') }}" alt=""></div>
									<div class="contact_info_text">betzhabe@outlook.com</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="{{ asset('wish/images/contact_info_2.png') }}" alt=""></div>
									<div class="contact_info_text">betzhabe@betzhabe.com</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="{{ asset('wish/images/contact_info_3.png') }}" alt=""></div>
									<div class="contact_info_text">011 4459 1939</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="{{ asset('wish/images/contact_info_3.png') }}" alt=""></div>
									<div class="contact_info_text">011 5435 8248</div>
								</li>
								<li>
									<div class="contact_info_icon"><img src="{{ asset('wish/images/contact_info_3.png') }}" alt=""></div>
									<div class="contact_info_text">011 15 5478 9246</div>
								</li>
							</ul>
						</div>
						<div class="contact_info_social">
							<ul>
								<li><a href="https://www.instagram.com/betzhabe_lenceria/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="https://www.facebook.com/betzhabel/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/Betzhabe_L" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="contact_title">faq</div>
						<div class="faq_content">

							<!-- Accordions -->
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Realizan ventas mayoristas?</div></div>
									<div class="accordion_panel">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Hacer envios al interior del país?</div></div>
									<div class="accordion_panel">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Trabajan con talles Especiales?</div></div>
									<div class="accordion_panel">
										<p>Trabajamos con talles hasta el 120.</p>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	@include('newsletter')

	<!-- Footer -->

	@include('footer')
</div>
@endsection

@push('scripts')
	<!-- contact -->
	<script src="{{ asset('wish/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('wish/styles/bootstrap4/popper.js') }}"></script>
	<script src="{{ asset('wish/styles/bootstrap4/bootstrap.min.js') }}"></script>
	<script src="{{ asset('wish/plugins/easing/easing.js') }}"></script>
	<script src="{{ asset('wish/plugins/parallax-js-master/parallax.min.js') }}"></script>		
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="{{ asset('wish/js/contact_custom.js') }}"></script>
@endpush