<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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

route::get('/',[HomeController::class,'index']);

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/user',[AdminController::class,'show']);

route::get('/view_fighters',[AdminController::class,'view_fighters']);

route::post('/add_fighters',[AdminController::class,'add_fighters']);

route::get('/show_fighters',[AdminController::class,'show_fighters']);

route::get('/delete_fighers/{id}',[AdminController::class,'delete_fighers']);

route::get('/update_fighters/{id}',[AdminController::class,'update_fighters']);

route::post('/update_fighters_confirm/{id}',[AdminController::class,'update_fighters_confirm']);



route::get('/delete_user/{id}',[AdminController::class,'delete_user']);

route::post('/add_product',[AdminController::class,'add_product']);
route::get('/view_product',[AdminController::class,'view_product']);
route::get('/show_product',[AdminController::class,'show_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::get('/scheduletab',[HomeController::class,'scheduletab']);


route::get('/contacts',[HomeController::class,'contacts']);

route::get('/aboutus',[HomeController::class,'aboutus']);


route::get('/fighter',[HomeController::class,'fighter']);




route::get('/combatshop',[HomeController::class,'combatshop']);


route::get('/redirect',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

