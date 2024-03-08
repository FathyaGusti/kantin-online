
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="">
								<a href="index.html"><img src="{{asset('backend/img/1.png')}}" alt="#"></a>
							</div>
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<p class="text">@foreach($settings as $data) {{$data->short_des}} @endforeach</p>
							<p class="call"><span><a href="tel:123456789">@foreach($settings as $data) {{$data->phone}} @endforeach</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="row">
						<div class="col-lg-2 col-md-6 col-12"> 
							<div class="single-footer links">
								<h4>Kategori</h4>
								<div class="category">
									<ul>
										<li><a href="#">Makanan</a></li>
										<li><a href="#">Minuman</a></li>
										<li><a href="#">Alat Tulis</a></li>
										<li><a href="#">Barang Lain</a></li>
									</ul>
								</div>
							</div>
						</div>
					
						<div class="col-lg-2 col-md-6 col-12">
							<div class="single-footer links">
								<h4>Our Company</h4>
								<ul>
									<li><a href="#">Delivery</a></li>
									<li><a href="#">Terms and Condition</a></li>
									{{-- <li><a href="#">Kebijakan Privasi</a></li> --}}
								</ul>
							</div>
						</div>
					
						<div class="col-lg-2 col-md-6 col-12"> 
							<div class="single-footer links">
								<h4>Service</h4>
								<div class="service">
									<ul>
										<li><a href="#">Fast</a></li>
										<li><a href="#">New Product</a></li>
										<li><a href="#">Best Sales</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					
						<div class="col-lg-2 col-md-6 col-12"> 
							<div class="single-footer links">
								<h4>Contact</h4>
								<div class="contact">
									<ul>
										<li><i class="fa fa-map-marker"></i> SMKN 1 CIBINONG</li>
										<li><i class="fa fa-phone"></i> 0882-1146-4597</li>
										<li><i class="fa fa-envelope"></i> Javeer@gmail.com</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © {{date('Y')}} <a href="https://github.com/Prajwal100" target="_blank">Javeer</a>  -  All Rights Reserved.</p>
							</div>
						</div>
					</footer>
					<!-- /End Footer Area -->
						{{-- <div class="col-lg-6 col-12">
							<div class="right" style="float: right; margin-left: 20px;">
								<img src="{{asset('backend/img/mie.png')}}" alt="#" style="width: 100%; height:auto;">
							</div>
						</div> --}}
 
	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('frontend/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	{{-- Isotope --}}
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>

	
	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>
