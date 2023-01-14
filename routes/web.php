<?php

use App\Http\Controllers\CompanyController;
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

Route::get('examples/factorial', ['uses' => 'App\Http\Controllers\ExampleController@getFactorial', 'as' => 'examples.getFactorial']);
Route::post('examples/factorial', ['uses' => 'App\Http\Controllers\ExampleController@postFactorial', 'as' => 'examples.postFactorial']);

Route::get('examples/credito', ['uses' => 'App\Http\Controllers\ExampleController@getCredito', 'as' => 'examples.getCredito']);
Route::post('examples/credito', ['uses' => 'App\Http\Controllers\ExampleController@postCredito', 'as' => 'examples.postCredito']);

Route::resource('companies', CompanyController::class);
