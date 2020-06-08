<!DOCTYPE html>
<html lang="zxx">
<head>
 <title>Yummy</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="description" content="Music template project">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <link rel="shortcut icon" href="{{ asset('img/laravel-icon.png') }}">
 <!-- Css Styles -->
 <link href="{{asset('css/news.css')}}" rel="stylesheet" type="text/css"/>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="/"><img src="img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="#">News</a></li>
                                <li><a href="/recipes_page_{{ 1 }}">Recipes</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="/recipes_page_{{ 1 }}">Recipes</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Search Section Begin -->
    <div class="hero-search set-bg" data-setbg="img/search-bg.jpg">
        <div class="container">
            <div class="filter-table">
                <form action="#" class="filter-search">
                    <input type="text" class="search-title" placeholder="Search recipe" required="required">
                    <select id="category">
                        <option value="">Main Course</option>
						<option value="">Dessert</option>
						<option value="">English</option>
						<option value="">Italian</option>
						<option value="">Romanian</option>
						<option value="">Caribbean</option>
						<option value="">Mediterranean</option>
						<option value="">Meat</option>
						<option value="">Vegetarian</option>
						<option value="">Soup</option>
						<option value="">Cake</option>
						<option value="">Porridge</option>
						<option value="">Pancake</option>
                    </select>
                    <select id="tag">
                        <option value="">spicy</option>
						<option value="">chilly</option>
						<option value="">steak</option>
						<option value="">pork</option>
						<option value="">onion</option>
						<option value="">lemon</option>
						<option value="">carrot</option>
						<option value="">lentil</option>
						<option value="">chocolate</option>
						<option value="">chicken</option>
						<option value="">chorizo</option>
						<option value="">rice</option>
						<option value="">pie</option>
						<option value="">burger</option>
						<option value="">maize</option>
						<option value="">flour</option>
						<option value="">easy</option>
                    </select>
                    <button class="search_button" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Hero Search Section End -->

    <!-- Recipe Section Begin -->
    <section class="recipe-section spad">
        <div class="container">
            <div class="row">
			@php ($count = 0)
            @foreach ( $titles as $title )
			    @php ($count++)
                <div class="col-lg-4 col-sm-6">
                    <div class="recipe-item">
                        <a href="{{ $urls[$count-1] }}"><img src="{{ $images[$count-1] }}" alt=""></a>
                        <div class="ri-text">
                            <div class="cat-name">{{ $categories[$count-1] }}</div>
                            <a href="{{ $urls[$count-1] }}">
                                <h4>{{ $titles[$count-1] }}</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
							<small class="date">{{ $dates[$count-1] }}</small>
                        </div>
                    </div>
                </div>
			@endforeach	

            </div>
        </div>
    </section>
    <!-- Recipe Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="fs-left">
                        <div class="logo">
                            <a href="/">
                                <img src="img/footer-logo.png" alt="">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <form action="{{ route('subscribe') }}" class="subscribe-form" method="post">
					    @csrf <!-- {{ csrf_field() }} -->
                        <h3>Subscribe to our newsletter</h3>
                        <input type="email" placeholder="Your e-mail" name="email" required="required">
                        <button type="submit">Subscribe</button>
                    </form>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                        <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> | Developed by Aureliu Mocanu
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" class="search-string" placeholder="Search here....." required="required">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Js Plugins -->
    <script src="source-js/jquery-3.3.1.min.js"></script>
    <script src="source-js/bootstrap.min.js"></script>
    <script src="source-js/jquery.slicknav.js"></script>
    <script src="source-js/jquery.nice-select.min.js"></script>
    <script src="source-js/mixitup.min.js"></script>
    <script src="source-js/main.js"></script>
	<script src="{{ asset('js/main-news.js') }}"></script> 
</body>

</html>