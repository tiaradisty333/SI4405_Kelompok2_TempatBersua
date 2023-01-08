<?php

// use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\RestoController;
use App\Models\User;
use App\Models\Resto;
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
    return view('home');
});
// Route::get('login', function () {
//     return view('login');
// });

// Route::get('regis', function () {
//     return view('regis');
// });



Route::get('/foryou', function () {
    return view('foryou');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('explore', function () {
    $iklanBerbayar = Resto::where('category', 'berbayar')->get();
    $iklan = Resto::all();
    return view('explore',compact('iklanBerbayar','iklan'));
});

Route::get('formiklan', function () {
    return view('formiklan');
});

Route::get('like', function () {
    return view('like');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('admin', function () {
    $user = User::where('status', 'logged in')->get();
    $resto = Resto::where('status', 'approved')->get();
    $waiting = Resto::where('status', 'waiting')->get();
    return view('admin',compact('user','resto','waiting'));
});

    // Route::post('register', []{
    //     return view('detail');
    // });

Route::get('/login', [UserLogin::class, 'login']);
Route::get('/regis', [UserLogin::class, 'regis']);

Route::post('/register', [UserLogin::class, 'store']);
Route::post('/masuk', [UserLogin::class, 'masuk']);
Route::put('/logout/{id}', [UserLogin::class, 'logout']);

Route::put('/update/{id}', [UserLogin::class, 'update']);

//resto
Route::post('/iklanAdmin', [RestoController::class, 'store']);
Route::post('/iklanUser', [RestoController::class, 'storeuser']);
Route::post('/ubahStatusPost/{id}', [RestoController::class,'ubahStatusPost']);
Route::post('/ubahStatusDecline/{id}', [RestoController::class,'ubahStatusDecline']);
// Route::get('/detail/{id}', [RestoController::class, 'showDetail']);


