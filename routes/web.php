<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExampleController;
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

Route::get('examples/factorial', [ExampleController::class, 'getFactorial'])->name('examples.getFactorial');
Route::post('examples/factorial', [ExampleController::class, 'postFactorial'])->name('examples.postFactorial');

Route::get('examples/credito',  [ExampleController::class, 'getCredito'])->name('examples.getCredito');
Route::post('examples/credito', [ExampleController::class, 'postCredito'])->name('examples.postCredito');

Route::get('examples/modelo', function () {
   return view('examples/modelo');
})->name('examples.getModelo');

Route::resource('companies', CompanyController::class);
