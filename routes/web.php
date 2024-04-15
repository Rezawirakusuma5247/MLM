<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MlmController;

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
Route::get('/', [Controller::class,'welcome'])->name('welcome');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login-proses', [LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/register-proses', [LoginController::class,'register_proses'])->name('register-proses');

Route::group(['prefix' => 'writer','middleware' => ['auth'],'as' => 'writer.'], function(){
    //Profile
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::match(['put', 'patch'], '/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'vals','middleware' => ['auth'],'as' => 'vals.'], function(){
    //Form Validation
    Route::get('/validation', [MlmController::class,'validation'])->name('validation');
    Route::get('/create', [MlmController::class,'create'])->name('form.create');
    Route::post('/store', [MlmController::class,'store'])->name('form.store');
    Route::delete('/delete/{id}', [MlmController::class, 'delete'])->name('form.delete');

    Route::get('/thanks',[MlmController::class, 'thanks'])->name('thanks');
    Route::Get('/uhh', [MlmController::class, 'uh'])->name('uhoh');
    Route::get('/information', [MlmController::class,'information'])->name('information');

    Route::Get('/product', [MlmController::class, 'product'])->name('product');
    Route::get('/proses', [MlmController::class, 'proses'])->name('proses');
    Route::get('/request', [MlmController::class, 'request'])->name('request');
    Route::post('/form', [MlmController::class, 'form'])->name('form.product');
    route::delete('delete-p/{id}',[MlmController::class, 'delete_product'])->name('delete.product');

    Route::get('/provals', [MlmController::class,'provals'])->name('provals');
    Route::get('/create-p', [MlmController::class,'create_p'])->name('provals.create');
    Route::post('/store-p', [MlmController::class,'store_p'])->name('provals.store');
    route::delete('delete-vals/{id}',[MlmController::class, 'delete_provals'])->name('delete.provals');
});

Route::group(['prefix' => 'admin','middleware' => ['auth'],'as' => 'admin.'], function(){
    Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
    //admin
    Route::get('/user-d', [HomeController::class,'user'])->name('user');
    Route::get('/user', [HomeController::class,'index'])->name('index');
    Route::get('/create', [HomeController::class,'create'])->name('user.create');
    Route::post('/store', [HomeController::class,'store'])->name('user.store');

    //Form Edit Admin
    Route::get('/edit/{id}' ,[HomeController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}' ,[HomeController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

});





