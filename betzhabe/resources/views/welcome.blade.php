@extends('layout')

@section('style')
	<link rel="stylesheet" href="{{ asset('wish/styles/bootstrap4/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('wish/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('wish/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ asset('wish/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" />
	<link rel="stylesheet" href="{{ asset('wish/plugins/OwlCarousel2-2.2.1/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('wish/plugins/colorbox/colorbox.css') }}" />
	<link rel="stylesheet" href="{{ asset('wish/styles/main_styles.css') }}" />
	<link rel="stylesheet" href="{{ asset('wish/styles/responsive.css') }}" />
@endsection

@section('content')
<div class="super_container">
	
	<!-- Header -->

	@include('header')

	<!-- Menu -->

	@include('menu')

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('wish/images/bhome_01.jpg') }})"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<!--<div class="home_slider_subtitle">New</div>-->
							<div class="home_slider_title">Invierno 2019</div>
							<!-- <div class="home_slider_title">New Collection</div> -->
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('wish/images/bhome_02.jpg') }})"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
						<!--<div class="home_slider_subtitle">New</div>-->
							<div class="home_slider_title">Invierno 2019</div>
							<!-- <div class="home_slider_title">New Collection</div> -->
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('wish/images/bhome_03.jpg') }})"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
						<!--<div class="home_slider_subtitle">New</div>-->
							<div class="home_slider_title">Invierno 2019</div>
							<!-- <div class="home_slider_title">New Collection</div> -->
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('wish/images/arrow_r.png') }}" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	@include('promo')

	<!-- New Arrivals -->

	@include('new_arrivals')

	<!-- Extra -->

	@include('extra')

	<!-- Gallery -->

	@include('galery')

	<!-- Testimonials -->

	@include('testimonials')

	<!-- Newsletter -->

	@include('newsletter')

	<!-- Footer -->

	@include('footer')
</div>
@endsection

@push('scripts')
	<script src="{{ asset('wish/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('wish/styles/bootstrap4/popper.js') }}"></script>
	<script src="{{ asset('wish/styles/bootstrap4/bootstrap.min.js') }}"></script>
	<script src="{{ asset('wish/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
	<script src="{{ asset('wish/plugins/easing/easing.js') }}"></script>
	<script src="{{ asset('wish/plugins/parallax-js-master/parallax.min.js') }}"></script>
	<script src="{{ asset('wish/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
	<script src="{{ asset('wish/js/custom.js') }}"></script>
@endpush


