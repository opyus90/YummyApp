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
 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="/news">News</a></li>
                                <li><a href="/recipes_page_{{ 1 }}">Recipes</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="/recipes_page_{{ 1 }}">Recipes</a></li>
                        <li><a href="/news">News</a></li>
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

    <!-- Page Top Recipe Section Begin -->
    <section class="page-top-recipe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="pt-recipe-item large-item">
                        <a href="/recipe_Chicken Lasagne"><div class="pt-recipe-img set-bg" data-setbg="img/main-recipes/recipe-3.jpg">
                            <i class="fa fa-plus"></i>
                        </div></a>
                        <div class="pt-recipe-text">
                            <span>May 30, 2020</span>
                            <a href="/recipe_Chicken Lasagne"><h3>Chicken Lasagne</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-1">
                    <div class="pt-recipe-item">
                        <a href="/recipe_Lemon Drizzle Cake"><div class="pt-recipe-img set-bg" data-setbg="img/main-recipes/recipe-1.jpg">
                            <i class="fa fa-plus"></i>
                        </div></a>
                        <div class="pt-recipe-text">
                            <a href="/recipe_Lemon Drizzle Cake"><h4>Lemon Drizzle Cake</h4></a>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <a href="/recipe_Pork Steak with Onion"><div class="pt-recipe-img set-bg" data-setbg="img/main-recipes/recipe-2.jpg">
                            <i class="fa fa-plus"></i>
                        </div></a>
                        <div class="pt-recipe-text">
                            <a href="/recipe_Pork Steak with Onion"><h4>Pork Steak with Onion</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-3">
                    <div class="pt-recipe-item">
                        <a href="/recipe_Spiced Carrot and Lentil Soup"><div class="pt-recipe-img set-bg" data-setbg="img/main-recipes/recipe-4.jpg">
                            <i class="fa fa-plus"></i>
                        </div></a>
                        <div class="pt-recipe-text">
                            <a href="/recipe_Spiced Carrot and Lentil Soup"><h4>Spiced Carrot and Lentil Soup</h4></a>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <a href="/recipe_Easy Pancakes"><div class="pt-recipe-img set-bg" data-setbg="img/main-recipes/recipe-5.jpg">
                            <i class="fa fa-plus"></i>
                        </div></a>
                        <div class="pt-recipe-text">
                            <a href="/recipe_Easy Pancakes"><h4>Easy Pancakes</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Top Recipe Section End -->

    <!-- Categories Filter Section Begin -->
    <div class="categories-filter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="filter-item">
                        <ul>
                            <li class="active" data-filter=".main">Main Course</li>
                            <li data-filter=".meat">Meat</li>
                            <li data-filter=".vegetarian">Vegetarian</li>
                            <li data-filter=".italian">Italian</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cf-filter" id="category-filter">
                <div class="cf-item mix main meat">
                    <div class="cf-item-pic">
                        <a href="/recipe_Chicken and Chorizo Jambalaya"><img src="img/recipes/Chicken and Chorizo Jambalaya.jpg" alt=""></a>
                    </div>
                    <div class="cf-item-text">
                        <a href="/recipe_Chicken and Chorizo Jambalaya"><h5>Chicken and Chorizo Jambalaya</h5></a>
                    </div>
                </div>
                <div class="cf-item mix main meat">
                    <div class="cf-item-pic">
                        <a href="/recipe_Chilli con Carne"><img src="img/recipes/Chilli con Carne.jpg" alt=""></a>
                    </div>
                    <div class="cf-item-text">
                        <a href="/recipe_Chilli con Carne"><h5>Chilli con Carne</h5></a>
                    </div>
                </div>
                <div class="cf-item mix main vegetarian">
                    <div class="cf-item-pic">
                        <a href="/recipe_Falafel Burgers"><img src="img/recipes/Falafel Burgers.jpg" alt=""></a>
                    </div>
                    <div class="cf-item-text">
                        <a href="/recipe_Falafel Burgers"><h5>Falafel Burgers</h5></a>
                    </div>
                </div>
                <div class="cf-item mix main vegetarian">
                    <div class="cf-item-pic glutenfree">
                        <a href="/recipe_Mamaliga"><img src="img/recipes/Mamaliga.jpg" alt=""></a>
                    </div>
                    <div class="cf-item-text">
                        <a href="/recipe_Mamaliga"><h5>Mamaliga</h5></a>
                    </div>
                </div>
                <div class="cf-item mix main vegetarian italian">
                    <div class="cf-item-pic">
                        <a href="/recipe_Pizza Margherita"><img src="img/recipes/Pizza Margherita.jpg" alt=""></a>
                    </div>
                    <div class="cf-item-text">
                        <a href="/recipe_Pizza Margherita"><h5>Pizza Margherita</h5></a>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
    <!-- Categories Filter Section End -->

    <!-- Feature Recipe Section Begin -->
    <section class="feature-recipe">
        <div class="section-title">
            <h5>Last News</h5>
        </div>
        <div class="container po-relative">
            <div class="plus-icon">
                <i class="fa fa-plus"></i>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <a href="{{ $urls[0] }}"><img src="{{ $images[0] }}" alt=""></a>
                        </div>
                        <div class="fr-item-text">
                            <a href="{{ $urls[0] }}"><h4>{{ $titles[0] }}</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
							<small class="date">{{ $dates[0] }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <a href="{{ $urls[1] }}"><img src="{{ $images[1] }}" alt=""></a>
                        </div>
                        <div class="fr-item-text">
                            <a href="{{ $urls[1] }}"><h4>{{ $titles[1] }}</h4></a>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida.</p>
							<small class="date">{{ $dates[1] }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Recipe Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="fs-left">
                        <div class="logo">
                            <a href="#">
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
	<script src="{{ asset('js/main-app.js') }}"></script> 
</body>

</html>