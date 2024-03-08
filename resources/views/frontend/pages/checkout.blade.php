@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Isi Formulir Pembayaran</h2>
                                <p>Silahkan Isi Formulir di Bawah ini</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama Depan<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama Belakang<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nomor Telepon <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <dIV class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Kelas Jurusan<span>*</span></label>
                                            <select name="class_major" id="class_major">
                                                <option value="">Pilih Kelas Dan Jurusan</option>
                                                <option value="">X DKV 1</option>
                                                <option value="">X DKV 2</option>
                                                <option value="">X DKV 3</option>
                                                <option value="">XI DKV 1</option>
                                                <option value="">XI DKV 2</option>
                                                <option value="">XI DKV 3</option>
                                                <option value="">XII DKV 1</option>
                                                <option value="">XII DKV 2</option>
                                                <option value="">XII DKV 3</option>
                                                <option value="">X DPIB 1</option>
                                                <option value="">X DPIB 2</option>
                                                <option value="">X DPIB 3</option>
                                                <option value="">XI DPIB 1</option>
                                                <option value="">XI DPIB 2</option>
                                                <option value="">XI DPIB 3</option>
                                                <option value="">XII DPIB 1</option>
                                                <option value="">XII DPIB 2</option>
                                                <option value="">XII DPIB 3</option>
                                                <option value="">X BKP 1</option>
                                                <option value="">X BKP 2</option>
                                                <option value="">X BKP 3</option>
                                                <option value="">XI BKP 1</option>
                                                <option value="">XI BKP 2</option>
                                                <option value="">XI BKP 3</option>
                                                <option value="">XII BKP 1</option>
                                                <option value="">XII BKP 2</option>
                                                <option value="">XII BKP 3</option>
                                                <option value="">X TKJ 1</option>
                                                <option value="">X TKJ 2</option>
                                                <option value="">X TKJ 3</option>
                                                <option value="">XI TKJ 1</option>
                                                <option value="">XI TKJ 2</option>
                                                <option value="">XI TKJ 3</option>
                                                <option value="">XII TKJ 1</option>
                                                <option value="">XII TKJ 2</option>
                                                <option value="">XII TKJ 3</option>
                                                <option value="">X RPL 1</option>
                                                <option value="">X RPL 2</option>
                                                <option value="">X RPL 3</option>
                                                <option value="">XI RPL 1</option>
                                                <option value="">XI RPL 2</option>
                                                <option value="">XI RPL 3</option>
                                                <option value="">XII RPL 1</option>
                                                <option value="">XII RPL 2</option>
                                                <option value="">XII RPL 3</option>
                                                <option value="">X TP 1</option>
                                                <option value="">X TP 2</option>
                                                <option value="">X TP 3</option>
                                                <option value="">XI TP 1</option>
                                                <option value="">XI TP 2</option>
                                                <option value="">XI TP 3</option>
                                                <option value="">XII TP 1</option>
                                                <option value="">XII TP 2</option>
                                                <option value="">XII TP 3</option>
                                                <option value="">X TKR 1</option>
                                                <option value="">X TKR 2</option>
                                                <option value="">X TKR 3</option>
                                                <option value="">XI TKR 1</option>
                                                <option value="">XI TKR 2</option>
                                                <option value="">XI TKR 3</option>
                                                <option value="">XII TKR 1</option>
                                                <option value="">XII TKR  2</option>
                                                <option value="">XII TKR 3</option>
                                                <option value="">X TOI 1</option>
                                                <option value="">X TOI 2</option>
                                                <option value="">X TOI 3</option>
                                                <option value="">XI TOI 1</option>
                                                <option value="">XI TOI 2</option>
                                                <option value="">XI TOI 3</option>
                                                <option value="">XII TOI 1</option>
                                                <option value="">XII TOI 2</option>
                                                <option value="">XII TOI 3</option>
                                                <option value="">XIII TOI 1</option>
                                                <option value="">XIII TOI 2</option>
                                                <option value="">X SIJA 1</option>
                                                <option value="">X SIJA 2</option>
                                                <option value="">X SIJA 3</option>
                                                <option value="">XI SIJA 1</option>
                                                <option value="">XI SIJA 2</option>
                                                <option value="">XI SIJA 3</option>
                                                <option value="">XII SIJA 1</option>
                                                <option value="">XII SIJA 2</option>
                                                <option value="">XII SIJA 3</option>
                                                <option value="">XIII SIJA 1</option>
                                                <option value="">XIII SIJA 2</option>>
                                                <option value="">X TFLM 1</option>
                                                <option value="">X TFLM 2</option>
                                                <option value="">X TFLM 3</option>
                                                <option value="">XI TFLM 1</option>
                                                <option value="">XI TFLM 2</option>
                                                <option value="">XI TFLM 3</option>
                                                <option value="">XII TFLM 1</option>
                                                <option value="">XII TFLM 2</option>
                                                <option value="">XII TFLM 3</option>
                                                <option value="">XIII TFLM 1</option>
                                                <option value="">XIII TFLM 2</option>
                                            </select>
                                        </div>
                                    </dIV>
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Total Pesanan</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Subtotal<span>Rp{{number_format(Helper::totalCartPrice(),0,',', '.')}}</span></li>
                                            {{-- <li class="shipping"> --}}
                                                {{-- Biaya Pengiriman
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        <option value="">Select your address</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: Rp{{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Free</span>
                                                @endif --}}
                                            {{-- </li> --}}
                                            
                                            {{-- @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">You Save<span>Rp{{number_format(session('coupon')['value'],0,',', '.')}}</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Total<span>Rp{{number_format($total_amount,0, ',', '.')}}</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Total<span>Rp{{number_format($total_amount,0, ',', '.')}}</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div> --}}
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Pembayaran</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                            <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label> Bayar di Tempat</label><br>
                                                {{-- <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label>  --}}
                                            </form-group>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/uang-removebg-preview.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">Bayar Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-hand-drag"></i>
                        <h4>Pembayaran Tunai</h4>
                        <p>Pembayaran dilakukan secara tunai saat menerima pesanan

                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-money"></i>
                        <h4>Pengembalian Makanan Minuman Kadaluarsa</h4>
                        <p>Pengembalian uang makanan,minuman yang kadaluarsa

                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-check"></i>
                        <h4>Pilihan Makanan Minuman Sehat</h4>
                        <p>Makanan, Minuman Sehat dan Berkualitas

                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Harga Terbaik</h4>
                        <p>Harga tejangkau untuk semua

                        </p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        {{-- <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Dapatkan update terbaru seputar kantin sekolah kami ! Bergabunglah dengan newsletter kami dan jadilah yang pertama mengetahui tentang menu baru</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Gabung</button>
                            </form>
                        </div> --}}
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #c05408 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:rgb(250, 226, 14) !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('Rp'+(subtotal + cost-coupon).toFixed(0,',', '.'));
			});

		});

	</script>

@endpush
