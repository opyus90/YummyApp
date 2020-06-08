<?php

namespace App\Http\Controllers\Recipes;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class RecipesController extends Controller
{
    
    
    /***public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }*/

	public function getRecipes($page)
    {
		$categories = [];
		$recipes = [];
		$key = "normal";
		$data = collect( DB::table('recipes')->select('name', 'category')->get() );
		$numElements = $data->count();
		$numPages = ceil($numElements / 9);
		$chunk = $data->forPage($page, 9);
		$string = "";
		
		foreach ($chunk as $recipe) {
			array_push($recipes, $recipe->name);
            $category = explode(", ", $recipe->category);
            array_push($categories, $category[0]);
        }

        return view('recipes.recipes', ['recipes' => $recipes, 'categories' => $categories, 'page' => $page, 'numPages' => $numPages, 'key' => $key, 'string' => $string]);      
        
    }
	
	public function searchRecipes($str)
    {
		$categories = [];
		$recipes = [];
        $key = "specific";
		$str = trim($str, "{}");
		$arrStr = explode("_", $str);
		$page = $arrStr[3];
		$string = $arrStr[0]."_".$arrStr[1]."_".$arrStr[2];
		$data = DB::table('recipes')->select('name', 'category', 'tags')->get();

		foreach ($data as $recipe) {
			$nameFound = strpos(strtolower($recipe->name), strtolower($arrStr[0])) !== false;
			if ( $nameFound ) {
				$category = explode(", ", $recipe->category);
				
			    foreach ($category as $cat) {
			        $categoryFound = strpos(strtolower($cat), strtolower($arrStr[1])) !== false;
				    if ($categoryFound) {
						$tags = explode(", ", $recipe->tags);
						foreach ($tags as $tag) {
			                $tagFound = strpos(strtolower($tag), strtolower($arrStr[2])) !== false;
				            if ($tagFound) {
								array_push($recipes, $recipe->name);
								array_push($categories, $cat);
						        break;
							}
						}
						break;
					}
                }
				
					
            }
			
        }
		$collectionRecipes = collect( $recipes );
		$collectionCategories = collect( $categories );
		$numElements = $collectionRecipes->count();
		$numCategories = $collectionCategories->count();
		$numPages = ceil($numElements / 9);
		$chunkRecipes = $collectionRecipes->forPage($page, 9);
		$chunkCategories = $collectionCategories->forPage($page, 9);
		
		$chunkNumElements = $chunkRecipes->count();
		$chunkNumCategories = $chunkCategories->count();
		$chunkRec = [];
		$chunkCat = [];
		if ( $chunkNumElements < 9) {
			$myRecipes = json_decode($chunkRecipes, true);
			$myCategories = json_decode($chunkCategories, true);
			foreach ($myRecipes as $key => $value) {
				array_push($chunkRec, $value);
			}
			
			foreach ($myCategories as $key => $value) {
				array_push($chunkCat, $value);
			}
			$chunkRecipes = $chunkRec;
		    $chunkCategories = $chunkCat;
		} 
		
        return view('recipes.recipes', ['recipes' => $chunkRecipes, 'categories' => $chunkCategories, 'page' => $page, 'numPages' => $numPages, 'key' => $key, 'string' => $string]);
    }
	
	public function searchRelatedRecipes($str)
    {
		$categories = [];
		$recipes = [];
		$key = "related";
		$str = trim($str, "{}");
		$arrStr = explode("_", $str);
		$page = $arrStr[1];
		$string = $arrStr[0];
		$data = DB::table('recipes')->select('name', 'category', 'tags')->get();

		foreach ($data as $recipe) {
			$nameFound = strpos(strtolower($recipe->name), strtolower($arrStr[0])) !== false;
			$category = explode(", ", $recipe->category);
			if ( $nameFound ) {
				array_push($recipes, $recipe->name);
				array_push($categories, $category[0]);
			} else {
			    foreach ($category as $cat) {
			        $categoryFound = strpos(strtolower($cat), strtolower($arrStr[0])) !== false;
					$tags = explode(", ", $recipe->tags);
					$tagFound = false;
				    if ($categoryFound) {
						array_push($recipes, $recipe->name);
				        array_push($categories, $cat);
						break;
					} else {
						foreach ($tags as $tag) {
			                $tagFound = strpos(strtolower($tag), strtolower($arrStr[0])) !== false;
				            if ($tagFound) {
								array_push($recipes, $recipe->name);
								array_push($categories, $cat);
						        break;
							} 
						}
						if ($tagFound) break;
					}
                }
				
					
            }
			
        }
		$collectionRecipes = collect( $recipes );
		$collectionCategories = collect( $categories );
		$numElements = $collectionRecipes->count();
		$numCategories = $collectionCategories->count();
		$numPages = ceil($numElements / 9);
		$chunkRecipes = $collectionRecipes->forPage($page, 9);
		$chunkCategories = $collectionCategories->forPage($page, 9);
		
		$chunkNumElements = $chunkRecipes->count();
		$chunkNumCategories = $chunkCategories->count();
		$chunkRec = [];
		$chunkCat = [];
		if ( $chunkNumElements < 9) {
			$myRecipes = json_decode($chunkRecipes, true);
			$myCategories = json_decode($chunkCategories, true);
			foreach ($myRecipes as $key => $value) {
				array_push($chunkRec, $value);
			}
			
			foreach ($myCategories as $key => $value) {
				array_push($chunkCat, $value);
			}
			$chunkRecipes = $chunkRec;
		    $chunkCategories = $chunkCat;
		} 
		
        return view('recipes.recipes', ['recipes' => $chunkRecipes, 'categories' => $chunkCategories, 'page' => $page, 'numPages' => $numPages, 'key' => $key, 'string' => $string]);
    }
	
}
