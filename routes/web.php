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
    return view('welcome');
});

Route::get('/pizzas', function () {
    //get data form database
    $pizza = [
        'type' => 'hawaiian',
        'base' => 'cheesy crust',
        'price' => 10
    ];
    return view('pizzas', $pizza);
    //return 'pizzas!'; -- html 텍스트로 출력
    //return ['name'=>'veg pizzas', 'base'=>'classic']; --json 형식으로 출력
});
