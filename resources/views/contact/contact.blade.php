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
 <link href="{{asset('css/contact.css')}}" rel="stylesheet" type="text/css"/>
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
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="/news">News</a></li>
                                <li><a href="/recipes_page_{{ 1 }}">Recipes</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li class="active"><a href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="/recipes_page_{{ 1 }}">Recipes</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="#">Contact</a></li>
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

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('contactus') }}" class="contact-form" method="post">
					    @csrf <!-- {{ csrf_field() }} -->
                        <h3>Leave a Comment</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your name" maxlength="10" name="name" required="required">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your email" name="email" required="required">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Subject" name="subject" required="required">
                                <textarea placeholder="Comment" maxlength="300" name="message" required="required"></textarea>
                            </div>
                        </div>
                        <button type="submit" value="Submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDfQjhNRXAgXELMilbvWFDBKSG5H095ZZM&q=Dowdeswell+Cl,+London,+UK"
            height="550" style="border:0;" allowfullscreen=""></iframe>
        <div class="map-content set-bg" data-setbg="img/map-bg.png">
            <div class="contact-addr">
                <span>Dowdeswell Close, London, UK</span>
                <ul>
                    <li>+44 7552 974514</li>
                    <li>aureliu.mocanu@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map Section End -->

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
	<script src="{{ asset('js/main-contact.js') }}"></script> 
</body>

</html>