<?php

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
    $tasks =DB::table('prods')->get();
    //return $tasks;
    return view('welcome', compact('tasks'));
});


Route::get('tasks/{tasks}', function ($product_id) {
    //dd($product_id);
    $task =DB::table('prods')->where('product_id',$product_id)->first();
    //return $tasks;
    //dd($tasks);
    return view('tasks.show', compact('task'));
});

Route::get('tasks/', function () {
    //dd($product_id);
    $tasks =DB::table('prods')->get();
    //return $tasks;
    //dd($tasks);
    return view('tasks.index', compact('tasks'));
});
