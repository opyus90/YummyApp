<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class RecipeController extends Controller
{
    
    
    /***public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }*/

	public function getRecipe($name)
    {
		$name = trim($name, "{}");
		$categories = [];
		$tags = [];
		$recipe = DB::table('recipes')
		                  ->select('name', 'description', 'category', 'tags') 
						  ->where('name', '=', $name)
						  ->get();
						  
		$categories = explode(", ", $recipe[0]->category);
		$tags = explode(", ", $recipe[0]->tags);

        
        return view('recipes.recipe', 
		        ['name' => $name, 
				 'recipe' => json_encode($recipe),
                 'categories' => $categories,
                 'tags' => $tags]);
        
        
    }
	
}
