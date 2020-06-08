require('./bootstrap');

//window.Vue = require('vue');


//const $ = require('jquery');

//import 'jquery/dist/jquery.min.js';




$(document).ready(function() {
	
	console.log("hello");
	
	$(".search-string").on('keypress',function(e) {
        if( (e.which == 13) && ($('.search-string').val().length > 0) ) {
		   var val = $('.search-string').val();
		   var page = "1";
		   e.preventDefault();
		   $('.search-string').val('');  
		   window.location.href = "/recipes_related_search_"+val+"_"+page;
        }
    });

	$(".search-title").on('keypress',function(e) {
        if( (e.which == 13) && ($('.search-title').val().length > 0) ) {
		   var val = $('.search-title').val();
		   var cat = $('.filter-table #category').next().children().first().text();
		   var tag = $('#tag').next().children().first().text();
		   var page = "1";
		   e.preventDefault();
		   $('.search-title').val(''); 		   
		   window.location.href = "/recipes_search_"+val+"_"+cat+"_"+tag+"_"+page;
        }
    });
	
	$(".search_button").on('click',function(e) {
        if(  $('.search-title').val().length > 0  ) {
		   var val = $('.search-title').val();
		   var cat = $('.filter-table #category').next().children().first().text();
		   var tag = $('#tag').next().children().first().text();
		   var page = "1";
		   e.preventDefault();
		   $('.search-title').val(''); 		   
		   window.location.href = "/recipes_search_"+val+"_"+cat+"_"+tag+"_"+page;
        }
    });
	
	 
	 
});