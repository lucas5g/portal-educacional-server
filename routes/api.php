<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function(){
    return ['api' => 'Portal Educacional'];
});

Route::post('auth/login', 'Api\AuthController@login');

Route::group(['middleware' => ['apiJwt']], function(){
    Route::resource('students', 'Api\StudentController');
    Route::resource('teachers', 'Api\TeacherController');
    Route::resource('courses', 'Api\CourseController');
    Route::resource('users', 'UserController');
});
