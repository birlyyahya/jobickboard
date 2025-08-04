        @php
            $currentRoute = Route::currentRouteName();
        @endphp

        <!-- Header -->
        <header class="site-header mo-left header {{ $currentRoute === 'homepage' ? 'header-transparent' : '' }}">
            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">

                        <!-- Website Logo -->
                        <div class="logo-header">
                            <a href="{{ route('homepage') }}" class="logo-dark"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- Extra Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="header-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <a class="btn btn-dark btn-lg btn-shadow" target="_blank" href="{{ route('login') }}">login</a>
                            </div>
                        </div>

                        <!-- Search Form -->
                        <div class="dz-quik-search on">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Enter Your Keyword ...">
                                <span id="quik-search-remove"><i class="fa-solid fa-xmark"></i></span>
                            </form>
                        </div>


                        <!-- Header Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href="index.html" class="logo-dark"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav navbar navbar-left">
                                <li><a href="{{ route('homepage') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li class="sub-menu-down"><a href="javascript:void(0);">Jobs</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('jobs-grid') }}">Jobs Grid</a></li>
                                        <li><a href="{{ route('jobs-details') }}">Job Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                <li class="sub-menu-down"><a href="javascript:void(0);">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blog-list') }}">Blog List</a></li>
                                        <li><a href="{{ route('blog-grid') }}">Blog Grid</a></li>
                                        <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->
        </header>
        <!-- Header End -->
