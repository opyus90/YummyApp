require('./bootstrap');

//window.Vue = require('vue');


//const $ = require('jquery');

//import 'jquery/dist/jquery.min.js';


function getPages(routeStr){
	var pageNum = $(".recipe-pagination").attr("pageN"); 
	var pagesNum = $(".recipe-pagination").attr("pagesN");
	var pagesHtml = '<ul class="pages">';
	
	if( pageNum == 1 ) {
		var j;
		pagesHtml = pagesHtml.concat('<a class="page-prev" href="#">Prev</a><a href="/recipes_'+routeStr+'_1" class="active">01</a>');
		for ( j = 1; (j < pagesNum) && (j < 5); j++) {
			pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(j+1)+'">0'+(j+1)+'</a>');
			//pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_2">0'+(j+1)+'</a>');
	    }
		if (pageNum < pagesNum) {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="/recipes_'+routeStr+'_'+( parseInt(pageNum)+1 )+'">Next</a></ul>');
		} else {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="#">Next</a></ul>');
		}
	               
	} else if ( pageNum == 2 ) {
		var j;
		pagesHtml = pagesHtml.concat('<a class="page-prev" href="/recipes_'+routeStr+'_'+(pageNum-1)+'">Prev</a><a href="/recipes_'+routeStr+'_'+(pageNum-1)+'">0'+(pageNum-1)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum)+'" class="active">0'+(pageNum)+'</a>');
		
		for ( j = pageNum; (j < pagesNum) && (j < pageNum+3); j++) {
		    pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(j+1)+'">0'+(j+1)+'</a>');
	    }
		if (pageNum < pagesNum) {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="/recipes_'+routeStr+'_'+(pageNum+1)+'">Next</a></ul>');
		} else {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="#">Next</a></ul>');
		}
	} else if ( (pageNum == pagesNum-1) && ( pageNum > 2) ) {
		var j;
		pagesHtml = pagesHtml.concat('<a class="page-prev" href="/recipes_'+routeStr+'_'+(pageNum-1)+'">Prev</a><a href="/recipes_'+routeStr+'_'+(pageNum-3)+'">0'+(pageNum-3)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum-2)+'">0'+(pageNum-2)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum-1)+'">0'+(pageNum-1)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum)+'" class="active">0'+(pageNum)+'</a>');
		
		for ( j = pageNum; (j < pagesNum) && (j < pageNum+1); j++) {
		    pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(j+1)+'">0'+(j+1)+'</a>');
	    }
		if (pageNum < pagesNum) {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="/recipes_'+routeStr+'_'+(pageNum+1)+'">Next</a></ul>');
		} else {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="#">Next</a></ul>');
		}
	} else if ( (pageNum >= pagesNum) && ( pageNum > 2)  ) {
		pagesHtml = pagesHtml.concat('<a class="page-prev" href="/recipes_'+routeStr+'_'+(pageNum-1)+'">Prev</a><a href="/recipes_'+routeStr+'_'+(pageNum-4)+'">0'+(pageNum-4)+'</a>');
	    pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum-3)+'">0'+(pageNum-3)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum-2)+'">0'+(pageNum-2)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum-1)+'">0'+(pageNum-1)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum)+'" class="active">0'+(pageNum)+'</a>');
		
		if (pageNum < pagesNum) {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="/recipes_'+routeStr+'_'+(pageNum+1)+'">Next</a></ul>');
		} else {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="#">Next</a></ul>');
		}
	} else {
		var j;
	    pagesHtml = pagesHtml.concat('<a class="page-prev" href="/recipes_'+routeStr+'_'+(pageNum-1)+'">Prev</a><a href="/recipes_'+routeStr+'_'+(pageNum-2)+'">0'+(pageNum-2)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum-1)+'">0'+(pageNum-1)+'</a>');
		pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(pageNum)+'" class="active">0'+(pageNum)+'</a>');
		for ( j = pageNum; j < pageNum+2; j++) {
		    pagesHtml = pagesHtml.concat('<a href="/recipes_'+routeStr+'_'+(j+1)+'">0'+(j+1)+'</a>');
	    }
        if (pageNum < pagesNum) {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="/recipes_'+routeStr+'_'+(pageNum+1)+'">Next</a></ul>');
		} else {
			pagesHtml = pagesHtml.concat('<a class="page-next" href="#">Next</a></ul>');
		}
	}
	$('.pages').replaceWith(pagesHtml);
}

function typeSort(){
	var key = $(".recipe-pagination").attr("key");
	var string = $(".recipe-pagination").attr("string");
	var routeStr = "";

	if (key == "normal"){
		routeStr = "page";
		getPages(routeStr);
	} else if (key == "specific"){
		routeStr = "search_"+string;
		getPages(routeStr);
	} else {
		routeStr = "related_search_"+string;
		getPages(routeStr);
	}
	
}

$(document).ready(function() {
	
	console.log("hello");
	typeSort();
	
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