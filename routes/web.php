<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;


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

Route::get('one-to-one', [OneToOneController::class, 'oneToOne']);
Route::get('one-to-one-inverse', [OneToOneController::class, 'oneToOneInverse']);
Route::get('one-to-one-insert', [OneToOneController::class, 'oneToOneInsert']);

/**
 * One To Many 
 */
Route::get('one-to-many', [OneToManyController::class, 'oneToMany']);
Route::get('many-to-one', [OneToManyController::class, 'manyToOne']);

Route::get('/', function () {
    return view('welcome');
});
