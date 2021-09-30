<?php

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

//Route::get('/{id}', function ($id) {
////    return view('welcome');
//    return redirect()->route('redirect');
//})->where(['id' => '[0-9]+'])->name('id');
//
//Route::get('/redirect',function (){
//    return '重定向';
//})->name('redirect');
//
//Route::get('test', function () {
//    $id = request('uid');
//    return view('test',['id1' => $id]);
//});
//
//Route::get('blogs/{post}',function ($post){
//    $blogs = [
//        'my-first-post' => 'foo',
//        'my-second-post' => 'bar',
//    ];
//
//    if(!array_key_exists($post,$blogs)){
//        abort(404);
//    }
//    return view('post',['post' => $blogs[$post]]);
//});
//Route::get('blogs/{post}',[\App\Http\Controllers\PostController::class,'show']);
Route::get('posts/{post}',[\App\Http\Controllers\PostController::class,'show']);


Route::get('/',[\App\Http\Controllers\BlogController::class,'index']);
Route::get('blogs/create',[\App\Http\Controllers\BlogController::class,'create']);
//route('blogs.show',$blog)
//\route('blogs.show',$blog);
Route::get('blogs/{blog}',[\App\Http\Controllers\BlogController::class,'show'])->name('blogs.show');
Route::put('blogs/{blog}',[\App\Http\Controllers\BlogController::class,'update']);
Route::get('blogs/{blog}/edit',[\App\Http\Controllers\BlogController::class,'edit']);
Route::post('blogs',[\App\Http\Controllers\BlogController::class,'store']);


Route::get('projects/create',[\App\Http\Controllers\ProjectController::class,'create']);
Route::get('projects/{id}',[\App\Http\Controllers\ProjectController::class,'show']);
