<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChefsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SpecialsController;
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


//routes of every pages
Route::get("/", [IndexController::class,'index'])->name('index.view');
Route::get("/about", [AboutController::class,'index'])->name('about.view');
Route::get("/events", [EventsController::class,'index'])->name('events.view');
Route::get("/chefs", [ChefsController::class,'index'])->name('chefs.view');
Route::get("/gallery", [GalleryController::class,'index'])->name('gallery.view');
Route::get("/specials", [SpecialsController::class,'index'])->name('specials.view');

//route for contact us view
Route::post("/contact_us", [ContactController::class,'contact'])->name('form.contact');
Route::get("/contact_us", [ContactController::class,'index'])->name('contact.view');

//route for book a table view
Route::post("/book_table",[BookingController::class,'booking'])->name('form.book');
Route::get("/book_table",[BookingController::class,'index'])->name('booking.view');

//route for menu
Route::resource("menu",MenuController::class);

//route for admin
Route::get("/admin", [AdminController::class,'index'])->name('admin.view');

Route::get("/add_category", [AdminController::class,'addCategoryView'])->name('new.category');
Route::post("/add_category", [AdminController::class,'addCategory'])->name('add.category');