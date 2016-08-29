<?php


Route::get('/admin/home',['as'=>'admin_home', 'uses' => 'AdminController@AdminHome']);
Route::get('/admin_logout',['as'=>'admin_logout', 'uses' => 'AdminController@AdminLogout']);
Route::get('/admin',['as'=>'admin', 'uses' => 'AdminController@AdminLoginForm']);
Route::post('/admin_login',['as'=>'admin_login', 'uses' => 'AdminController@AdminLogin']);

Route::get('/user_view',['as'=>'user_view', 'uses' => 'UserController@UsersList']);
Route::get('/registration_form',['as'=>'registration_form', 'uses' => 'UserController@RegistrationForm']);
Route::post('/registration',['as'=>'registration', 'uses' => 'UserController@Registration']);

Route::get('/password_change/{id}',['as'=>'password_change', 'uses' => 'UserController@ChangePassword']);

Route::post('/password_reset',['as'=>'password_reset', 'uses' => 'UserController@PasswordReset']);


