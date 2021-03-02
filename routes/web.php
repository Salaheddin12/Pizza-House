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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pizzas',[PizzaController::class, 'index']);
// Route::get('/pizzas','PizzaController@index');
Route::get('/pizzas','App\Http\Controllers\PizzaController@index');

        
// $params = [
//     'type' => 'four Seasons',
//     'base' => 'cheesy crust',
//     'name' => request('name'),
//     'age' => request('age')
// ];
// return view('pizzas',$params);
// Route::get('/pizzas/{id}', function ($id) {

//     $params = [
//         'type' => 'four Seasons',
//         'base' => 'cheesy crust',
//         'id' => $id
//     ];
//     return view('pizzas',$params);
// });
