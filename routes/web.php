<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\admin\Authcontroller;

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

// Route::get('/', function () {
//     return view('front.index');
// });

Route::get('/',[HomeController::class, 'index']);

// authentication route

// Route::get('/register',[AuthController::class, 'store']);
// Route::get('/login',[AuthController::class, 'login']);

// Route::post('user-register', [AuthController::class, 'user_store'])->name('user-store');
// Route::post('user-login', [AuthController::class, 'user_login'])->name('user-login');


// admin Routes


Route::post('admin-login/store', [Authcontroller::class, 'admin_login'])->name('admin_login.store');
Route::get('admin/login', [Authcontroller::class, 'login'])->name('login');

Route::group(['middleware' => ['auth', 'admin.check']], function () {
    Route::get('/dashboard', [Authcontroller::class, 'dashboard'])->name('admin.dashboard');
              Route::get('/logout', [Authcontroller::class, 'logout'])->name('user-logout');
});



// Route::get('admin/login', [Authcontroller::class, 'login']);
// Route::post('admin-login/store', [Authcontroller::class, 'admin_login'])->name('admin_login.store');

// Route::get('/logout', [Authcontroller::class, 'logout'])->name('user-logout');

// Route::get('/dashboard' ,[Authcontroller::class, 'dashboard']);
// Route::get('/dashboard', function (){
//    return view('admin.dashboard');
// });

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/gallery', function () {
    return view('front.gallery');
});


Route::get('admin/header', function () {
    return view('admin.header');
});

Route::get('admin/sidebar', function () {
    return view('admin.sidebar');
});




// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
