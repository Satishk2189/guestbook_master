<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::post('/claim/new/save', 'UserController@saveNewClaim')->name('user.post.saveNewClaim');
Route::get('/viewClaims', 'AdminController@viewClaims')->name('admin.viewClaims');
Route::get('/claim/delete/{id}', 'AdminController@deleteClaim')->name('admin.deleteClaims');
Route::get('/claim/update/{id}', 'AdminController@statusUpdate')->name('admin.statusUpdate');