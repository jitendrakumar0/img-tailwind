<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Pages -> Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () { return view('tailwind/pages/home/home'); });
Route::get('/privacy-policy.php', function () { return view('tailwind/pages/privacy-policy/privacy-policy'); });
Route::get('/terms-and-conditions.php', function () { return view('tailwind/pages/terms-and-conditions/terms-and-conditions'); });
Route::get('/disclaimer.php', function () { return view('tailwind/pages/disclaimer/disclaimer'); });










/*
|--------------------------------------------------------------------------
| Components -> Templates -> sections -> Routes
|--------------------------------------------------------------------------
*/
Route::get('/components/templates/sections/cta', function () { return view('components/templates/sections/cta/cta'); });
Route::get('/components/templates/sections/feature', function () { return view('components/templates/sections/feature/feature'); });
Route::get('/components/templates/sections/header', function () { return view('components/templates/sections/header/header'); });
Route::get('/components/templates/sections/newsletter', function () { return view('components/templates/sections/newsletter/newsletter'); });
Route::get('/components/blog', function () { return view('components/templates/sections/blog/blog'); });
Route::get('/components/templates/sections/content', function () { return view('components/templates/sections/content/content'); });
Route::get('/components/templates/sections/logo-clouds', function () { return view('components/templates/sections/logo-clouds/logo-clouds'); });
Route::get('/components/templates/sections/elements-banners', function () { return view('components/templates/sections/elements-banners/elements-banners'); });
Route::get('/components/templates/sections/modals', function () { return view('components/templates/sections/modals/modals'); });
