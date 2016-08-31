<?php


Route::get('/message/{test}', ['as'=>'message', 'uses'=>'AdminController@Message']);

Route::get('/admin/home',['as'=>'admin_home', 'uses' => 'AdminController@AdminHome']);
Route::get('/admin_logout',['as'=>'admin_logout', 'uses' => 'AdminController@AdminLogout']);
Route::get('admin/login',['as'=>'admin', 'uses' => 'AdminController@AdminLoginForm']);
Route::post('admin/login',['as'=>'admin_login', 'uses' => 'AdminController@AdminLogin']);


// Middleware

Route::get('/user_view',['as'=>'user_view', 'uses' => 'UserController@UsersList'])->middleware('AdminValidationMiddleware');

Route::get('/password_change/{id}/{email}',['as'=>'password_change', 'uses' => 'UserController@ChangePassword'])->middleware('AdminValidationMiddleware');

Route::post('/password_reset',['as'=>'password_reset', 'uses' => 'UserController@PasswordReset'])->middleware('AdminValidationMiddleware');

Route::get('/registration_form',['as'=>'registration_form', 'uses' => 'UserController@RegistrationForm'])->middleware('AdminValidationMiddleware');
Route::post('/registration',['as'=>'registration', 'uses' => 'UserController@Registration'])->middleware('AdminValidationMiddleware');


//shakil's User Panel
//Route::get('/', function(){return view(in)})
Route::get('/', ['as'=>'home', 'uses'=>'LoginController@LoginForm']);
Route::post('loginform', ['as'=>'loginform', 'uses'=>'LoginController@CompleteLogin']);
//Route::get('/message/{test}', ['as'=>'message', 'uses'=>'UsersController@Message']);
Route::get('/index', ['as'=>'index', 'uses'=>'LoginController@Loginsuccess'])->middleware('UserValidationMiddleware');
//Route::get('/loginsuccess', ['as'=>'loginsuccess'], 'uses'=>'LoginController@Loginsuccess');
Route::get('form', function(){return view('user.form');})->middleware('UserValidationMiddleware');

Route::post('submitForm', ['as'=>'submitForm', 'uses'=>'GolfCourseController@Form'])->middleware('UserValidationMiddleware');

Route::get('list', ['as'=>'list', 'uses'=>'GolfCourseController@ViewCourse'])->middleware('UserValidationMiddleware');
Route::get('/user_message/{test}', ['as'=>'user_message', 'uses'=>'GolfCourseController@Message']);
Route::get('/course_details/{course_id}', ['as'=>'course_details', 'uses'=>'GolfCourseController@ViewDetails'])->middleware('UserValidationMiddleware');
Route::get('/user_logout',['as'=>'user_logout', 'uses' => 'LoginController@UserLogout']);

/////    ggg

