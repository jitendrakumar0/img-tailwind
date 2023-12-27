<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Pages -> Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
  return view('tailwind/pages/home/home');
});
Route::get('/privacy-policy.php', function () {
  return view('tailwind/pages/privacy-policy/privacy-policy');
});
Route::get('/terms-and-conditions.php', function () {
  return view('tailwind/pages/terms-and-conditions/terms-and-conditions');
});
Route::get('/disclaimer.php', function () {
  return view('tailwind/pages/disclaimer/disclaimer');
});
Route::get('/home-delivery-app-development.php', function () {
  return view('tailwind/pages/home-delivery-app-development/home-delivery-app-development');
});
Route::get('/propira-casestudy.php', function () {
  return view('tailwind/pages/propira-casestudy/propira-casestudy');
});










/*
|--------------------------------------------------------------------------
| Components -> Templates -> sections -> Routes
|--------------------------------------------------------------------------
*/
Route::get('/components/templates/sections/cta', function () {
  return view('tailwind/components/templates/sections/cta/cta');
});
Route::get('/components/templates/sections/feature', function () {
  return view('tailwind/components/templates/sections/feature/feature');
});
Route::get('/components/templates/sections/header', function () {
  return view('tailwind/components/templates/sections/header/header');
});
Route::get('/components/templates/sections/newsletter', function () {
  return view('tailwind/components/templates/sections/newsletter/newsletter');
});
Route::get('/components/templates/sections/blog', function () {
  return view('tailwind/components/templates/sections/blog/blog');
});
Route::get('/components/templates/sections/content', function () {
  return view('tailwind/components/templates/sections/content/content');
});
Route::get('/components/templates/sections/logo-clouds', function () {
  return view('tailwind/components/templates/sections/logo-clouds/logo-clouds');
});
Route::get('/components/templates/sections/elements-banners', function () {
  return view('tailwind/components/templates/sections/elements-banners/elements-banners');
});
Route::get('/components/templates/sections/modals', function () {
  return view('tailwind/components/templates/sections/modals/modals');
});
