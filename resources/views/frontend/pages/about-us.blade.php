@extends('frontend.layouts.master')

@section('title','JAVEER || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Kantin Virtual <span>SMKN 1 CIBINONG</span></h3>
							<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
							<div class="button">
								<a href="{{route('blog')}}" class="btn">Our Blog</a>
								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							{{-- <div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div> --}}
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->

	<!--Kantin Menu Section -->
	<section class="kantin-menu section">
		<div class="container">
			<div class="row">
				@foreach ($kantin_menu as $menu )
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-menu">
						<div class="menu-img">
							<img src="{{$menu->image }}" alt="{{ $menu->name }}">
					</div>
					<div class="menu-content">
						<h4>{{ $menu->name }}</h4>
						<p>{{ $menu->description }}</p>
						<span class="price">{{ $menu->price }}</span>
					</div>
				</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>


		<!-- Start Shop Services Area  -->
		<section class="shop-services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-hand-drag"></i>
							<h4>Pembayaran Tunai</h4>
							<p>Pembayaran dilakukan secara tunai saat menerima pesanan</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-money"></i>
							<h4>Pengembalian Makanan Minuman Kadaluarsa</h4>
							<p>Pengembalian uang makanan,minuman yang kadaluarsa</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-check"></i>
							<h4>Pilihan Makanan Minuman Sehat</h4>
							<p>Makanan, Minuman Sehat dan Berkualitas</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-tag"></i>
							<h4>Harga Terbaik</h4>
							<p>Harga tejangkau untuk semua </p>
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Newsletter -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection
