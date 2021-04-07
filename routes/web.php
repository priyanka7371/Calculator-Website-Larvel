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

Route::get('/feetcalculator/feetcalculator.blade.php', function () {
    return view('/feetcalculator/feetcalculator');
});

Route::get('/speedcalculator/speedcalculator.blade.php', function () {
    return view('/speedcalculator/speedcalculator');
});

Route::get('/tempraturecalculator/tempraturecalculator.blade.php', function () {
    return view('/tempraturecalculator/tempraturecalculator');
});

Route::get('/weightcalculator/weightcalculator.blade.php', function () {
    return view('/weightcalculator/weightcalculator');
});
