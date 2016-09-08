<?php  
Route::get('/message/{test}', ['as'=>'message', 'uses'=>'AdminController@Message']);
Route::get('/admin/home',['as'=>'admin_home', 'uses' => 'AdminController@AdminHome']);
Route::get('/admin_logout',['as'=>'admin_logout', 'uses' => 'AdminController@AdminLogout']);
Route::get('admin/login',['as'=>'admin', 'uses' => 'AdminController@AdminLoginForm']);
Route::post('admin/login',['as'=>'admin_login', 'uses' => 'AdminController@AdminLogin']);

//Middleware
Route::get('/user_view',['as'=>'user_view', 'uses' => 'UserController@UsersList'])->middleware('AdminValidationMiddleware');

Route::get('/password_change/{id}/{email}',['as'=>'password_change', 'uses' => 'UserController@ChangePassword'])->middleware('AdminValidationMiddleware');

Route::post('/password_reset',['as'=>'password_reset', 'uses' => 'UserController@PasswordReset'])->middleware('AdminValidationMiddleware');

Route::get('/registration_form',['as'=>'registration_form', 'uses' => 'UserController@RegistrationForm'])->middleware('AdminValidationMiddleware');
Route::post('/registration',['as'=>'registration', 'uses' => 'UserController@Registration'])->middleware('AdminValidationMiddleware');


Route::get('/profile_view',['as'=>'profile_view', 'uses' => 'UserController@ProfileView'])->middleware('UserValidationMiddleware');

Route::post('/change_picture',['as'=>'change_picture', 'uses' => 'UserController@ChangePicture'])->middleware('UserValidationMiddleware');

Route::post('/edit_name',['as'=>'edit_name', 'uses' => 'UserController@EditName'])->middleware('UserValidationMiddleware');





//User Panel

Route::get('/', ['as'=>'home', 'uses'=>'LoginController@LoginForm']);
Route::post('loginform', ['as'=>'loginform', 'uses'=>'LoginController@CompleteLogin']);
Route::get('/index', ['as'=>'index', 'uses'=>'LoginController@Loginsuccess'])->middleware('UserValidationMiddleware');
//Route::get('form', function(){return view('user.form');})->middleware('UserValidationMiddleware');

Route::get('/form', ['as'=>'form', 'uses'=>'GolfCourseController@HomeForm'])->middleware('UserValidationMiddleware');


Route::post('submitForm', ['as'=>'submitForm', 'uses'=>'GolfCourseController@Form'])->middleware('UserValidationMiddleware');
Route::get('list', ['as'=>'list', 'uses'=>'GolfCourseController@ViewCourseList'])->middleware('UserValidationMiddleware');
Route::get('/user_message/{test}', ['as'=>'user_message', 'uses'=>'GolfCourseController@Message']);
Route::get('/course_edit/{course_id}', ['as'=>'course_edit', 'uses'=>'GolfCourseController@EditCourse'])->middleware('UserValidationMiddleware');
Route::get('/course_view/{course_id}', ['as'=>'course_view', 'uses'=>'GolfCourseController@ViewCourse'])->middleware('UserValidationMiddleware');
Route::get('/user_logout',['as'=>'user_logout', 'uses' => 'LoginController@UserLogout']);
Route::post('/editForm/{course_id}', ['as'=>'editForm', 'uses'=>'GolfCourseController@EditForm'])->middleware('UserValidationMiddleware');
Route::get('/delete/{course_id}', ['as'=>'delete', 'uses'=>'GolfCourseController@Delete'])->middleware('UserValidationMiddleware');
Route::get('/get_csrf_token', ['as'=>'get_csrf_token', 'uses'=>'LoginController@GetCSRFToken'])->middleware('UserValidationMiddleware');


