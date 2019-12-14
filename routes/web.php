<?php

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
    return view('blog.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('accounts', 'AccountController');
Route::resource('roles','RoleController');
Route::resource('users','UserController');
Route::resource('jobs','JobController');
Route::resource('sabbaticalleaves','SabbaticalleavesController');
Route::resource('salarys', 'SalaryController');
Route::resource('countrys', 'CountryController');
Route::resource('recruitments', 'RecruitmentController');


Route::get('contact', function(){
    return view('blog.contact');
});
Route::get('about', function(){
    return view('blog.about');
});