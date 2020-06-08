<?php

namespace App\Http\Controllers\News;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Goutte\Client;

use Symfony\Component\DomCrawler\Crawler;
use Exception;

class NewsController extends Controller
{
	private $client;
	public $images = [];
	public $dates = [];
	public $titles = [];
	public $categories = [];
	public $urls = [];
	public $count = 24;
	
    public function __construct()
    {

    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function getNews()
    {
		
		
		$client = $client2 = new Client([
                   'timeout'   => 10,
                   'verify'    => false
                  ]);
		
        $crawler = $client->request('GET', 'https://culinarynewsworld.com/');

		$crawler->filter('.twp-related-articles-list .col-sm-6 .twp-image-section a, 
		                  .twp-related-articles-list .col-sm-6 .twp-description .twp-categories ul,
		                  .twp-related-articles-list .col-sm-6 .twp-description .twp-post-title a,
		                  .twp-related-articles-list .col-sm-6 .twp-description .twp-author-desc span')->each(function ($node) {
          		  
		  if( $this->count == 0) return;
		  else {
		    if( $node->attr('data-background') ) {
				array_push($this->images, $node->attr('data-background'));
			} else if ( $node->attr('class') == "cat-links") {
				$category = $node->children('li a')->first()->text();
				array_push($this->categories, $category);
		    } else if ( explode(" ", $node->attr('class') )[0] == "item-metadata" ) {
				array_push($this->dates, $node->text());
		    } else {
			
				 array_push($this->titles, $node->text());
				 array_push($this->urls, $node->attr('href'));

			}
			$this->count--;
		  }
        });
		
		return view('news.news', ['images' => $this->images, 
		                          'categories' => $this->categories,
		                          'dates' => $this->dates, 
								  'titles' => $this->titles, 
								  'urls' => $this->urls ]);
    }
}
