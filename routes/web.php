<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/test1', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



//同一類的放一起
Route::get('/abc', function () {
    return "<h1>Hello abc</h1>";
})->name('abc123');

Route::get('/user/{id}/location/{location}', function ($id, $location) {
    return 'User ' . $id . " address: " . $location;
});

Route::get('/php/{id}', function ($id) {
    return '<h1>Hello PHP Student ' . $id . ' :))</h1>';
});

//用name的無論網址怎麼改變，都可以生效
Route::get('/whatever_123456789', function (Request $request) {
    dd($request);
})->name('get_data');


Route::resource('tests', TestController::class);
Route::resource('tests/{id}', TestController::class);
// Route::post('tests/{id}', TestController::class);
//練習
//localhost/php/6

// hello php student 31 :))


require __DIR__ . '/auth.php';
