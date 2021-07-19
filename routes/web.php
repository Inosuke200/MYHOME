<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\PilierController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pillier', [ContactController::class,'contacter']);

Route::get('/users', [PilierController::class, 'grouper'])->name('piliers');
Route::get('/space', [SpaceController::class,'espace'])->name('espace');


Route::get('/contact', [ContactController::class,'contacter'])->name('contact');
Route::post('/contacthello', [EmailController::class,'sendEmail'])->name('test');;

Route::get('/space', [SpaceController::class, 'espace'])->name('espace');


Route::get('/space_1','App\Http\Controllers\Space_1Controller@inscriptions')->name('espace_1');
Route::post('/space_1','App\Http\Controllers\Space_1Controller@inscription')->name('insertdata');

Route::get('/create-newsletter', 'App\Http\Controllers\NewsletterController@create')->name('new');
Route::post('/store-newsletter', 'App\Http\Controllers\NewsletterController@store')->name('test');

Route::get('/accuse','App\Http\Controllers\NewsletterController@accused');
Route::get('/success','App\Http\Controllers\SuccessController@successed');

Route::get('/locationa','App\Http\Controllers\LocationController@location');

Route::get('/vendre','App\Http\Controllers\VenteController@vented');


Route::get('/dashboard', 'App\Http\Controllers\DashbordController@dashboard');


Route::get('/annonce', 'App\Http\Controllers\AnnonceController@annonces')->name('annonce');


Route::get('/favoris', 'App\Http\Controllers\FavorisController@favoris')->name('favorites');

Route::get('/alertemail', 'App\Http\Controllers\AlertemailController@alertemails')->name('alertemail');

Route::get('/premium', 'App\Http\Controllers\PremiumController@premiums')->name('premium');


?>