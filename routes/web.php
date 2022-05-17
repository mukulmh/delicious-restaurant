<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MenuController;
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

/*
Route::get('/', function () {
    return view('index');
}); 

Route::get("/", [Controller::class,'index']);

*/

//routes of every pages
Route::view("/","index")->name('index.view');
Route::view("/about","about")->name('about.view');
//Route::view("/menu","menu")->name('menu.view');
//Route::get("/menu", [Controller::class, 'menu'])->name('menu.view');
Route::view("/events","events")->name('events.view');
Route::view("/chefs","chefs")->name('chefs.view');
Route::view("/gallery","gallery")->name('gallery.view');
//Route::view("/contact","contact")->name('contact.view');
Route::view("/booking","booking")->name('booking.view');
Route::view("/specials","specials")->name('specials.view');

//route for contact us form
Route::post("/contact_us", [ContactController::class,'contact'])->name('form.contact');
Route::get("/contact_us", [ContactController::class,'index'])->name('contact.view');

//route for book a table form
Route::post("/book_table",[BookingController::class,'booking'])->name('form.book');

//route for menu
Route::resource("menu",MenuController::class);