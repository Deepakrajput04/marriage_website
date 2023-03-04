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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');

Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::post('/addcontact', [App\Http\Controllers\HomeController::class, 'addcontact'])->name('addcontact');

Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');

Route::get('/deletecontact{id}', [App\Http\Controllers\HomeController::class, 'deletecontact'])->name('deletecontact');

Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');

//admin

Route::get('/slider', [App\Http\Controllers\HomeController::class, 'slider'])->name('slider');

Route::post('/addslider', [App\Http\Controllers\HomeController::class, 'addslider'])->name('addslider');

Route::get('/deleteslider/{id}', [App\Http\Controllers\HomeController::class, 'deleteslider'])->name('deleteslider');

Route::get('/editslider/{id}', [App\Http\Controllers\HomeController::class, 'editslider'])->name('editslider');

Route::post('/updateslider/{id}', [App\Http\Controllers\HomeController::class, 'updateslider'])->name('updateslider');

Route::get('/ourservices', [App\Http\Controllers\HomeController::class, 'ourservices'])->name('ourservices');

Route::post('/addourservices', [App\Http\Controllers\HomeController::class, 'addourservices'])->name('addourservices');

Route::get('/deleteourservices/{id}', [App\Http\Controllers\HomeController::class, 'deleteourservices'])->name('deleteourservices');

Route::get('/editourservices/{id}', [App\Http\Controllers\HomeController::class, 'editourservices'])->name('editourservices');

Route::post('/updateourservices/{id}', [App\Http\Controllers\HomeController::class, 'updateourservices'])->name('updateourservices');

Route::get('/ourblogs', [App\Http\Controllers\HomeController::class, 'ourblogs'])->name('ourblogs');

Route::post('/addourblogs', [App\Http\Controllers\HomeController::class, 'addourblogs'])->name('addourblogs');

Route::get('/deleteourblogs/{id}', [App\Http\Controllers\HomeController::class, 'deleteourblogs'])->name('deleteourblogs');

Route::get('/editourblogs/{id}', [App\Http\Controllers\HomeController::class, 'editourblogs'])->name('editourblogs');

Route::post('/updateourblogs/{id}', [App\Http\Controllers\HomeController::class, 'updateourblogs'])->name('updateourblogs');

Route::get('/ourorganizers', [App\Http\Controllers\HomeController::class, 'ourorganizers'])->name('ourorganizers');

Route::post('/addourorganizers', [App\Http\Controllers\HomeController::class, 'addourorganizers'])->name('addourorganizers');

Route::get('/deleteourorganizers/{id}', [App\Http\Controllers\HomeController::class, 'deleteourorganizers'])->name('deleteourorganizers');

Route::get('/editourorganizers/{id}', [App\Http\Controllers\HomeController::class, 'editourorganizers'])->name('editourorganizers');

Route::post('/updateourorganizers/{id}', [App\Http\Controllers\HomeController::class, 'updateourorganizers'])->name('updateourorganizers');





