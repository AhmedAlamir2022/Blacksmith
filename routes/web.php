<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatergoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/contactme',[ContactController::class, 'Contact'])->name('contact.me');
Route::post('/store/message',[ContactController::class, 'StoreMessage'])->name('store.message');
Route::get('/aboutus',[ContactController::class, 'About'])->name('about.us');
Route::get('/privacy',[ContactController::class, 'Privacy'])->name('privacy');
Route::get('/categories',[ContactController::class, 'Category'])->name('category');
Route::get('/services',[ServiceController::class, 'Service'])->name('service');
Route::get('/category/service/{id}',[ServiceController::class, 'CategoryService'])->name('category.service');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('/profile',[UserController::class, 'Profile'])->name('profile');
    Route::post('/profile',[userController::class, 'StoreProfile'])->name('store.profile');
    Route::get('/change/password',[UserController::class, 'ChangePassword'])->name('change_password');
    Route::post('/update/password',[UserController::class, 'UpdatePassword'])->name('update.password');
    Route::get('/logout',[UserController::class, 'destroy'])->name('endlogout');

    Route::resource('Category', CatergoryController::class);
    Route::resource('Service', ServiceController::class);
    Route::resource('Types', TypesController::class);
    Route::resource('Question', QuestionController::class);
    Route::resource('Privacy', PrivacyController::class);
    Route::resource('Query', QueryController::class);
    Route::resource('Contact', ContactController::class);

    Route::get('/add/admin',[UserController::class,'AddAdmin'])->name('add.admin');
    Route::post('/create/admin',[UserController::class,'CreateAdmin'])->name('admin.create');
    Route::get('/alladmins',[UserController::class,'AdminAll'])->name('all.admin');
    Route::post('/delete/admin',[UserController::class, 'DeleteAdmin'])->name('delete.admin');
    
});

require __DIR__.'/auth.php';
