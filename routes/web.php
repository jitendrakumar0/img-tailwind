<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () { return view('pages/home/home'); });










/*
|--------------------------------------------------------------------------
| Components -> Templates -> sections -> Routes
|--------------------------------------------------------------------------
*/
Route::get('components/templates/sections/cta', function () { return view('components/templates/sections/cta/cta'); });
Route::get('components/templates/sections/feature', function () { return view('components/templates/sections/feature/feature'); });
