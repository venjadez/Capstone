<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JerseyController;
use App\Http\Controllers\ClientFormController;
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


Route::post('Jersey', [JerseyController::class, 'jerseyformdata']);
Route::get('/', function()
{
    return view ('Jersey');
});
