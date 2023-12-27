<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

//Order Controller Route without blade template
Route::get('/add-order',[OrderController::class, 'Index'] )->name('add.order');
Route::post('/insert-order',[OrderController::class, 'Store'] );
Route::get('/all-order',[OrderController::class, 'AllOrder'] )->name('all.order');
Route::get('/view-order/{id}',[OrderController::class, 'ViewOrder'] );
// Route::get('/delete-order/{id}',[OrderController::class, 'DeleteOrder'] );
Route::delete('/delete-order/{id}',[OrderController::class, 'DeleteOrder'] );
Route::get('/edit-order/{id}',[OrderController::class, 'EditOrder'] );
Route::put('/update-order/{id}',[OrderController::class, 'UpdateOrder'] );



//Post Controller Route with blade template
Route::controller(PostController::class)->group(function(){
    Route::get('/add-post','Index' )->name('add.post');
    Route::post('/insert-post','Store');
    Route::get('/all-post','AllPost' )->name('all.post');
    Route::get('/view-post/{id}','ViewPost' );
    // Route::get('/delete-post/{id}','DeletePost' );
    Route::delete('/delete-post/{id}','DeletePost' );
    Route::get('/edit-post/{id}','EditPost' );
    Route::put('/update-post/{id}','UpdatePost' );
});



Route::view('/home', 'frontend.home')->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/contact', 'frontend.contact')->name('contact');


//Category Controller
Route::resource('categories',CategoryController::class);


//Clear Cache On Live Project By Creating Route
Route::get('/cacheClear', function() {
    Artisan::call('cache:clear');
    return "Cache Cleared Successfully";
});