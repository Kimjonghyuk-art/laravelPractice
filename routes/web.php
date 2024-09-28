<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});

Route::get('/users', function() {
    return 'Hello world';
});
//optional
Route::get('/users/{name?}', function($name = null) {
    return 'Hello '.$name;
});
//파라미터 조건 
//숫자 이외의 값의 경우 404
Route::get('/products/{id?}', function($id = null) {
    return 'productId : '. $id;
})->where('id', '[0-9]+');

Route::get('/test/{name?}', [TestController::class, 'index'])->name('home.index');

Route::get('/testPage/{name}', function($name) {
    return view('test', compact('name'));
});
//XSS 공격 테스트
Route::get('/example', function() {
    return view('example', ['name' => '<script>alert("test");</script>']);
});

Route::get('/test11', [ProductController::class, 'index'])->name('product.index');