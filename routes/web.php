<?php

Route::view('/', 'welcome');
Route::view('development', 'pages.development');
Route::view('community', 'pages.community');
Route::view('about', 'pages.about');
Route::view('thank-you', 'pages.thankyou');

Route::post('contact/submit', 'ContactController@store')->name('contact.submit');

Route::get('weblog', 'BlogController@publicindex')->name('weblog.index');
Route::get('weblog/{slug}', 'BlogController@publicshow')->name('weblog.show');
// Route::get('weblog/{slug}', 'BlogController@show')->name('weblog.show');

Route::resource('projects', 'ProjectController');
Route::get('projects/{slug}/completed', 'ProjectController@completed')->name('project.completed');
Route::get('projects/{slug}/deleted', 'ProjectController@deleted')->name('project.deleted');
Route::get('projects/{slug}/all', 'ProjectController@all')->name('project.all');
Route::resource('projects.tasks', 'TaskController');
Route::resource('projects.tags', 'TagController');
Route::resource('projects.blogs', 'BlogController');

Route::get('admin/contacts', 'ContactController@index');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('home', 'HomeController@index')->name('home');
