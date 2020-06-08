require('./bootstrap');

//window.Vue = require('vue');


//const $ = require('jquery');



import './app.js';



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
	
	 
	 
});