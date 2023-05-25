<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get("/test",[TestController::class,'test']);


Route::get('/', [\App\Http\Controllers\TextControler:: class,'index']);
/*
Route::get("/test",[TestController::class,'test']);

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/hello', function () {
    return view('welcome');
})->name('hello');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/custom',function() {
    $custom = 'Custom Message';
    return view('custom',['msj'=>$custom]);
});

*/



