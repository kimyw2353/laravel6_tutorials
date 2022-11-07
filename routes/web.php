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

use Illuminate\Routing\Route;

Route ::get('/', function () {
    return view('welcome');
});

Route ::get('/pizzas_if', function () {
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

// Pizza
Route ::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route ::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route ::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route ::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route ::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

// Kebab
Route::get('/kebabs', 'KebabController@index');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
