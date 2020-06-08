<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/newsletters', function () {
    return view('newsletters.newsletters');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/', 'HomeController@getHome')->name('home');

Route::get('/blog', 'Blog\BlogController@getComments')->name('blog');

Route::post('/comment_{title}', 'Blog\BlogController@addComment')->name('comment');

Route::post('/contactus', 'Contact\ContactController@contactus')->name('contactus');

Route::get('/recipes_page_{page}', 'Recipes\RecipesController@getRecipes')->name('recipes');

Route::get('/recipe_{name}', 'Recipes\RecipeController@getRecipe')->name('recipe');

Route::get('/recipes_search_{str}', 'Recipes\RecipesController@searchRecipes')->name('search recipes');

Route::get('/recipes_related_search_{str}', 'Recipes\RecipesController@searchRelatedRecipes')->name('search related recipes');

Route::get('/news', 'News\NewsController@getNews')->name('news');

Route::post('/subscribe', 'Newsletters\NewslettersController@getNewsletters')->name('subscribe');

Route::post('/unsubscribe', 'Newsletters\NewslettersController@delNewsletters')->name('unsubscribe');