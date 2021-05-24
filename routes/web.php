<?php

use App\Models\aqar;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/aqars/{aqar}',function(){
    
//    $aqar = aqar::find($slug);

    return view('aqar');
})->where('aqar', '[A-z_\-]+');



Route::get('/newlisting', function () {
    return view('newlisting');
});

Route::get('/companies/{type}', function () {
    return view('companies');
})->where('type', '[A-z_\-]+');


Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blogs/{type}', function () {
    return view('blog');
})->where('type', '[A-z_\-]+');

Route::get('/search/{searchType}', function () {
    return view('search');
})->where('searchType', '[A-z_\-]+');

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/forget-password', function () {
    return view('forget-password');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/favourites', function () {
    return view('favourites');
});