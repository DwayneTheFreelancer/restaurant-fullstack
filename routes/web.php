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

// Static Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singlemenu');
Route::get('/about', 'StaticPagesController@about');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@saveReservation');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/giftcards', 'StaticPagesController@giftcards');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/thank-you', 'StaticPagesController@thankYouPage');

// Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:Admin');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')->middleware('role:Admin');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update')->middleware('role:Admin');
Route::delete('/admin/food-categories/{id}', 'admin\FoodCategoriesController@delete')->middleware('role:Admin');

// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index')->middleware('role:Admin');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')->middleware('role:Admin');
Route::post('/admin/food-items', 'admin\FoodItemsController@store')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')->middleware('role:Admin');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update')->middleware('role:Admin');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')->middleware('role:Admin');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index')->middleware('role:Admin');
Route::get('/admin/users/create', 'admin\UsersController@create')->middleware('role:Admin');
Route::post('/admin/users/', 'admin\UsersController@store')->middleware('role:Admin');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')->middleware('role:Admin');
Route::put('/admin/users/{id}', 'admin\UsersController@update')->middleware('role:Admin');
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete')->middleware('role:Admin');

// Admin Customers
// Admin Members
Route::get('/admin/members', 'admin\MemberController@index');
Route::get('/admin/members/create', 'admin\MemberController@create');
Route::post('/admin/members/', 'admin\MemberController@store');
Route::get('admin/members/{id}/edit', 'admin\MemberController@edit');
Route::put('/admin/members', 'admin\MemberController@update');
Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete');

// Admin Reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::delete('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');

// Admin Settings
Route::get('/admin/settings/general', 'admin\SettingsController@general');
Route::post('/admin/settings/general', 'admin\SettingsController@savegeneral');
Route::get('/admin/settings/seo', 'admin\SettingsController@seo');
Route::post('/admin/settings/seo', 'admin\SettingsController@saveSeo');
Route::get('/admin/settings/social', 'admin\SettingsController@social');
Route::post('/admin/settings/social', 'admin\SettingsController@saveSocial');

// Admin Auth
Route::get('/admin/register', function() {
    return view('admin/register');
});

Route::get('/admin/login', function() {
    return view('admin/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
