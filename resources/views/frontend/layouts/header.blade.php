<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('backend/img/logokantin-removebg.png') }}"  alt="logo" style="width: 200px;"></a>
                        </div>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content d-flex justify-content-end align-items-center">
                  <!-- Cart and Wishlist Icons -->
                  <div class="icons">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route ('cart') }}">
                            <i class="ti-shopping-cart"></i>
                        </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route ('wishlist') }}">
                                <i class="ti-heart"></i>
                            </a>
                        </li>
                    </ul>
                  </div>
                     <!-- End Cart and Wishlist Icons -->

                        <ul class="list-main">
                            <!-- List items for top right section -->
                            @auth 
                                @if(Auth::user()->role=='admin')
                                    <li><i class="ti-user"></i> <a href="{{ route('admin') }}"  target="_blank">Dashboard</a></li>
                                @else 
                                    <li><i class="ti-user"></i> <a href="{{ route('user') }}"  target="_blank">Dashboard</a></li>
                                @endif
                                <li><i class="ti-power-off"></i> <a href="{{ route('user.logout') }}">Logout</a></li>
                            @else
                                <li><i class="ti-power-off"></i><a href="{{ route('login.form') }}">Login /</a> <a href="{{ route('register.form') }}">Register</a></li>
                            @endauth
                        </ul>
                        <!-- Second Logo -->
                        <div class="second-logo ml-3">
                            <a href="{{ route('home') }}"><img src="{{ asset('backend/img/logo-SMKN-1-Cbn-removebg-preview.png') }}" alt="Second Logo" style="width: 150px;"></a>
                        </div>
                        <!-- End Second Logo -->
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->

    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Navbar Toggler -->
                            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{ Request::path()=='home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                            {{ Helper::getHeaderCategory() }}
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
