<?php   
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CdvSite; 
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController1;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ExchangeRateController;
use App\Http\Controllers\Cdv;
use Illuminate\Http\Request; 



Route::get('/', function() {
    // $name = request('name'); 
    // return view('test', [
    //     'name' => $name
    // ]); 
    return view('welcome');
});

Route::get('/site', [CdvSite::class, 'index']);

Route::get('/drives/{drive}', [PageController::class, 'show']);

Route::get('blade', function() {
    return view('szablon');
});

// Route::get('userform', function() {
//     return view('userform'); 
// });

Route::view('userform', 'userform');
Route::get('UserController', [UserController::class, 'account']);

Route::view('user', 'user');
Route::get('UserController', [UserController1::class, 'index']);

Route::view('contact', 'contact');
Route::get('ContactController', [ContactController::class, 'contactForm']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);
Auth::routes(); 

Route::get('data', [DataController::class, 'getPosts']);

Route::get('album', [DataController::class, 'getAlbums']);

Route::get('kursy', [ExchangeRateController::class, 'getRate']);

Route::view('kalkulatorwalut', 'calculate');

Route::get('ExchangeRateController', [ExchangeRateController::class, 'calcRate']);
Auth::routes();

Route::get('db', [Cdv::class, 'index']);

Route::get('profile/{locale}', function($locale) {
    $locale = request('locale');
    App::setLocale($locale);
    return view('profile');
});