<?php


Route::get('/admin/home',['as'=>'admin_home', 'uses' => 'AdminController@AdminHome']);
Route::get('/admin_logout',['as'=>'admin_logout', 'uses' => 'AdminController@AdminLogout']);
Route::get('admin/login',['as'=>'admin', 'uses' => 'AdminController@AdminLoginForm']);
Route::post('admin/login',['as'=>'admin_login', 'uses' => 'AdminController@AdminLogin']);


// Middleware

Route::get('/user_view',['as'=>'user_view', 'uses' => 'UserController@UsersList'])->middleware('AdminValidationMiddleware');

Route::get('/password_change/{id}',['as'=>'password_change', 'uses' => 'UserController@ChangePassword'])->middleware('AdminValidationMiddleware');

Route::post('/password_reset',['as'=>'password_reset', 'uses' => 'UserController@PasswordReset'])->middleware('AdminValidationMiddleware');

Route::get('/registration_form',['as'=>'registration_form', 'uses' => 'UserController@RegistrationForm'])->middleware('AdminValidationMiddleware');
Route::post('/registration',['as'=>'registration', 'uses' => 'UserController@Registration'])->middleware('AdminValidationMiddleware');


//shakil's User Panel
Route::get('loginform', ['as'=>'loginform', 'uses'=>'LoginController@LoginForm']);
Route::post('loginform', ['as'=>'login', 'uses'=>'LoginController@CompleteLogin']);
//Route::get('/message/{test}', ['as'=>'message', 'uses'=>'UsersController@Message']);
Route::get('/index', ['as'=>'index', 'uses'=>'LoginController@Loginsuccess']);
//Route::get('/loginsuccess', ['as'=>'loginsuccess'], 'uses'=>'LoginController@Loginsuccess');
Route::get('form', function(){return view('form');});
Route::post('submitForm', ['as'=>'submitForm', 'uses'=>'GolfCourseController@Form']);
Route::get('list', ['as'=>'list', 'uses'=>'GolfCourseController@ViewCourse']);
Route::get('/course_details/{course_id}', ['as'=>'course_details', 'uses'=>'GolfCourseController@ViewCourse']);
/////    ggg

