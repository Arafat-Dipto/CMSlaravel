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

//frontend routes..
Route::get('/','UserController@index');
Route::get('/post/{id}/view','UserController@postView')->name('postView');
Route::get('/video/{id}/view','UserController@videoView')->name('videoView');



//admin routes...
Route::group(['prefix'=>'admin'],function() {

    Route::get('/login', 'AdminController@showlogin')->name('admin.login.show');
    Route::post('/login', 'AdminController@login')->name('admin.login');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');




    Route::get('/action','AdminDashboardController@action');
    Route::get('/post/create','AdminDashboardController@createPostShow');
    Route::post('/post/create','AdminDashboardController@createPost')->name('admin.postcreate');




    Route::post('/video/create','AdminDashboardController@createVideo')->name('admin.videocreate');
    Route::get('/post','AdminDashboardController@showPost');
    Route::get('/post/{id}/unpublishPost','AdminDashboardController@unpublishPost');
    Route::get('/post/{id}/publishPost','AdminDashboardController@publishPost');
    Route::get('/video','AdminDashboardController@showVideo');
    Route::get('/post/{id}/unpublishVideo','AdminDashboardController@unpublishVideo');
    Route::get('/post/{id}/publishVideo','AdminDashboardController@publishVideo');
    Route::get('/post/{id}/deletePost','AdminDashboardController@deletePost')->name('admin.postDelete');
    Route::get('/post/{id}/deleteVideo','AdminDashboardController@deleteVideo')->name('admin.videoDelete');




});