<?php

use Illuminate\Support\Facades\Input;
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


// Route::get('/hello', function () {
//     //return view('welcome');
//     return '<h1>hello world</h1>';
// });

/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' .$name. 'With an id of '.$id;
});


*/

Route::get('/', 'PagesController@index');
Route::get('/news', 'PagesController@news');
/* Route::get('/services', 'PagesController@services');*/

Route::resource('posts', 'PostController');




Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/search', 'PostController@search');

