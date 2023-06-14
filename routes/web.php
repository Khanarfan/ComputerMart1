<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Contacts_Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;



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
    return view('Home');
});

Route::get('/dbconn', function(){
    return \File::get(public_path() . '/dbconn.php');
});

Route::get('/contacts',[Contacts_Controller::class,'index']);
Route::get('/register',[RegisterController::class,'Register']); 
Route::post('/registeraccount', 'RegisterController@RegisterAccount');
Route::get('/login',[loginController::class,'login']);
Route::get('/home', function (){
    return view('home');
}

);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('products', ProductController::class);


