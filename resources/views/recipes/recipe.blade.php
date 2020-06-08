<!DOCTYPE html>
<html lang="zxx">
<head>
 <title>Yummy</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="description" content="Yoga Studio Template">
 <meta name="keywords" content="Yoga, unica, creative, html">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <link rel="shortcut icon" href="{{ asset('img/laravel-icon.png') }}">
 <!-- Css Styles -->
 <link href="{{asset('css/recipe.css')}}" rel="stylesheet" type="text/css"/>
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

    <!-- Single Recipe Section Begin -->
    <section class="single-page-recipe spad" data-recipe="{{ $recipe }}">
        <div class="recipe-top">
            <div class="container-fluid">
                <div class="recipe-title">
                    <span>
					@foreach ( $categories as $category )
					   {{ $category }}  /
					@endforeach
					Recipe
					</span>
                    <h2>{{ $name }}</h2>
                    <ul class="tags">
					@foreach ( $tags as $tag )
                        <li>{{ $tag }}</li>
					@endforeach
                    </ul>
                </div>
                <img src="img/recipe-single/{{ $name }}_single.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="img/recipes/{{ $name }}.jpg" alt="">
                            <h2>{{ $name }}</h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="reviews">4.9 from 25 reviews</div>
                            <div class="recipe-time">
                                <ul>
                                    <li>Prep time: <span>10 min</span></li>
                                    <li>Cook time: <span>10 min</span></li>
                                    <li>Yield: <span>5</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="recipe-btn">
                                <a href="#">Print Recipe</a>
                                <a href="#" class="black-btn">Pin Recipe</a>
                            </div>
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                <div class="salad-list">
                                    <h6>For the salad</h6>
                                    <ul>
                                        <li>1 brick of frozen udon</li>
                                        <li>1/2 cup kimchi, plus a bit of kimchi juice</li>
                                        <li>1 tablespoon of butter</li>
                                        <li>1 sac of mentaiko</li>
                                        <li>sliced green onions and nori, to finish</li>
                                    </ul>
                                </div>
                                <div class="dressing-list">
                                    <h6>For the dressing</h6>
                                    <ul>
                                        <li>1 brick of frozen udon</li>
                                        <li>1/2 cup kimchi, plus a bit of kimchi juice</li>
                                        <li>1 tablespoon of butter</li>
                                        <li>1 sac of mentaiko</li>
                                        <li>sliced green onions and nori, to finish</li>
                                        <li>1 tablespoon of butter</li>
                                        <li>1 sac of mentaiko</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nutrition-fact">
                        <div class="nutri-title">
                            <h6>Nutrition Facts</h6>
                            <span>Serves 4</span>
                        </div>
                        <ul>
                            <li>Total Fat : 20.4g</li>
                            <li>Cholesterol : 2%</li>
                            <li>Chalories: 345</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in sodales dui, a
                                blandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh.
                                Nam massa odio, porttitor vitae efficitur non, ultricies volutpat tellus. Cras egestas
                                in lacus a finibus. Suspendisse sed urna at elit condimentum viverra. Suspendisse non
                                lobortis nisi. Maecenas accumsan quam quis porta laoreet. Aliquam felis odio, aliquet
                                fermentum semper at, porttitor ac mi. Duis vel condimentum risus. Phasellus eu dolor vel
                                neque commodo accumsan eget et enim. Pellentesque non elit sed risus tincidunt aliquam
                                eu eget metus.</p>
                            <p>Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus, maximus
                                tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non auctor
                                ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a, ornare ipsum.
                                Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac. Nullam viverra
                                tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis lacus, non rutrum diam
                                volutpat id. </p>
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra. Suspendisse non lobortis nisi. Maecenas accumsan quam quis
                                    porta laoreet. Aliquam felis odio, aliquet fermentum semper at, porttitor ac mi.
                                </li>
                                <li>
                                    <span>02.</span>
                                    Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                    Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus,
                                    maximus tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non
                                    auctor ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a,
                                    ornare ipsum. Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac.
                                    Nullam viverra tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis
                                    lacus, non rutrum diam volutpat id.
                                </li>
                                <li>
                                    <span>03.</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra. Suspendisse non lobortis nisi. Maecenas accumsan quam quis
                                    porta laoreet. Aliquam felis odio, aliquet fermentum semper at, porttitor ac mi.
                                </li>
                                <li>
                                    <span>04.</span>
                                    Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                    Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus,
                                    maximus tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non
                                    auctor ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a,
                                    ornare ipsum. Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac.
                                    Nullam viverra tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis
                                    lacus, non rutrum diam volutpat id.
                                </li>
                            </ul>
                        </div>
                        <div class="notes">
                            <h3>Notes</h3>
                            <div class="notes-item">
                                <span>i</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra.</p>
                            </div>
                            <div class="notes-item">
                                <span>i</span>
                                <p>Donec in sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin
                                    neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non,
                                    ultricies volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at
                                    elit condimentum viverra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Recipe Section End -->

    <!-- Similar Recipe Section Begin -->
    <section class="similar-recipe spad">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="img/cat-feature/small-7.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Italian Tiramisu with Coffe</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="img/cat-feature/small-6.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Dry Cookies with Corn</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="img/cat-feature/small-5.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Asparagus with Pork Loin and Vegetables</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="similar-item">
                        <a href="#"><img src="img/cat-feature/small-4.jpg" alt=""></a>
                        <div class="similar-text">
                            <div class="cat-name">Vegan</div>
                            <h6>Smoked Salmon mini Sandwiches with Onion</h6>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- Similar Recipe Section End -->

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
	<script src="{{ asset('js/main-recipe.js') }}"></script> 
</body>

</html>