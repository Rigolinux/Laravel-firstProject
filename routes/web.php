<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\App;

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


//create route for dashboard all routes
// this case is more easy to use but we need to use all the routes


//route test with middleware
Route::middleware([App\Http\Middleware\Testmiddleware::class])->group(function(){
    Route::get('/test', function () {
        return view('welcome');
    });

});	


// routes bt prefix
Route::group(['prefix' => 'dashboard'], function () {
   // Route::resource('post', PostController::class);
   //Route::resource('category', CategoryController::class);

   // you can concat the resource 2 coulb be like this
    Route::resource([
        'post' => PostController::class,
        'category' => CategoryController::class
    ]);

    // and i can elimite route with only or except
    //Route::resource('post', PostController::class)->only(['index','show']);
    //Route::resource('post', PostController::class)->except(['index','show']);
    
});


// create a group of routes
/* Route::controller(PostController::class)->group(function(){
    Route::get('post', [PostController::class, 'index'])->name('post.index');
    Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');
    Route::get('post/create',[PostController::class, 'show'])->name('post.create');
    Route::post('post',[PostController::class, 'store'])->name('post.store');
    Route::put('post/{post}',[PostController::class, 'update'])->name('post.update');
    Route::delete('post/{post}',[PostController::class, 'update'])->name('post.delete');
}) */


//create route for dashboard all routes includes in one resource its like the above
// but we can use only the routes that we need or we can use all of them

/* Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('post/create',[PostController::class, 'show'])->name('post.create');
Route::post('post',[PostController::class, 'store'])->name('post.store');
Route::put('post/{post}',[PostController::class, 'update'])->name('post.update');
Route::delete('post/{post}',[PostController::class, 'update'])->name('post.delete');
 */


//Route::get("/test",[TestController::class,'test']);


//Route::get('/', [\App\Http\Controllers\TextControler:: class,'index']);
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



