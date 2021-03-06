<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// User Routes
Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index')->name('user.home');
    Route::get('/post/{post:slug}', 'PostController@post')->name('post');

    Route::get('post/tag/{tag:slug}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category:slug}', 'HomeController@category')->name('category');
});

// Admin Routes
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/admin/home', 'HomeController@index')->name('admin.home');
    // User Routes
    Route::resource('/admin/user', 'UserController');
    // Role Routes
    Route::resource('/admin/role', 'RoleController');
    // Permission Routes
    Route::resource('/admin/permission', 'PermissionController');
    // Post Routes
    Route::resource('/admin/post', 'PostController');
    // Tag Routes
    Route::resource('/admin/tag', 'TagController');
    // Category Routes
    Route::resource('/admin/category', 'CategoryController');
    // Admin Auth Routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
    Route::post('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
