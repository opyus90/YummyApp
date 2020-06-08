<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
   

    /**
     * Where to redirect after subscribing.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
       
    }*/
    

	public function getComments()
    {

        $blogs = [];
		$titles = [];
		$count = 0;
		$data = DB::table('blog')->select('title', 'name', 'email', 'comment', 'date')->get() ;
		
		foreach ($data as $blog) {
			array_push($titles, $blog->title);
			$blogs[$blog->title][$count][] = $blog->name;
			$blogs[$blog->title][$count][] = $blog->date;
            $blogs[$blog->title][$count][] = $blog->comment;
			$count++;
        }
		
		return view('blog.blog', ['blogs' => $blogs, 'titles' => array_unique($titles)]); 
    }
	
	/*** Add a comment */
	public function addComment($title)
    {
		// do anything else you need here, like add comment
		$name = isset($_POST["name"]) && !empty($_POST["name"]) ? $_POST["name"] : false;
		$email = isset($_POST["email"]) && !empty($_POST["email"]) ? $_POST["email"] : false;
		$comment = isset($_POST["comment"]) && !empty($_POST["comment"]) ? $_POST["comment"] : false;
		
		switch (false) {
          case $name:
            return view('errors.min_500');
            break;
          case $email:
            return view('errors.min_500');
            break;
		  case $comment:
            return view('errors.min_500');
            break;
          default:
		    $date = date("M d, Y");
            $created = date("Y-m-d H:i:s");
			$updated = date("Y-m-d H:i:s");
			
            DB::table('blog')->insert([
                  ['title' => $title, 'name' => $name, 'email' => $email, 'comment' => $comment, 'date' => $date, 'created_at' => $created, 'updated_at' => $updated]
            ]);

            return $this->getComments();
		}
    }
}
