<?php

use App\Article;
//fortesting
use App\User;
use App\Developer;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/',[
		'uses'=>'UserController@getDashboard',
		'middleware' => 'auth'
		
]);
		
Route::get('/signinpage',[
		'uses'=>'UserController@getSignInPage',
		'as'=>'signinpage'	
		
]);

Route::post('/signin',[
		'uses'=>'UserController@postSignIn',
		'as'=>'signin'
		
]);
Route::get('/dashboard',[
		'uses'=>'UserController@getDashboard',
		'as'=> 'dashboard',
		'middleware' => 'auth'
]);


Route::get('/logout', [
		'uses'=>'UserController@getLogout',
		'as'=>'logout',

]);
Route::get('/error', [
		'uses'=>'UserController@error',
		'as'=>'error',

]);


Route::group(['middleware' => ['admin-g']], function () {
	Route::post('/dashboard/signup',[
		'uses'=>'AdminController@postSignUp',
		'as'=>'signup',
		
	]);
	Route::get('/dashboard/reg',[
			'uses'=>'AdminController@getReg',
			'as'=>'reg',
			
	]);
	Route::get('/dashboard/edituser',[
			'uses'=>'AdminController@getEditUser',
			'as'=>'edituser',
	
	]);
	Route::get('/dashboard/addproject',[
			'uses'=>'AdminController@getAddProject',
			'as'=>'addproject',
	
	]);
	Route::get('/dashboard/viewproject',[
			'uses'=>'AdminController@getViewProject',
			'as'=>'viewproject',
	
	]);
	Route::get('/dashboard/editproject',[
			'uses'=>'AdminController@getEditProject',
			'as'=>'editproject',
	]);
	Route::get('/dashboard/deleteproject',[
			'uses'=>'AdminController@getDeleteProject',
			'as'=>'deleteproject',
	]);
	Route::get('/dashboard/addtask',[
			'uses'=>'AdminController@getAddTask',
			'as'=>'addtask',
	
	]);
	Route::get('/dashboard/viewtask',[
			'uses'=>'AdminController@getViewTask',
			'as'=>'viewtask',
	
	]);
	Route::get('/dashboard/edittask',[
			'uses'=>'AdminController@getEditTask',
			'as'=>'edittask',
	]);
	Route::get('/dashboard/deletetask',[
			'uses'=>'AdminController@getDeleteTask',
			'as'=>'deletetask',
	]);
	Route::get('/dashboard/addissue',[
			'uses'=>'AdminController@getAddIssue',
			'as'=>'addissue',
	
	]);
	Route::get('/dashboard/assignissue',[
			'uses'=>'AdminController@getAssignIssue',
			'as'=>'assignissue',
	
	]);
	Route::get('/dashboard/viewissue',[
			'uses'=>'AdminController@getViewIssue',
			'as'=>'viewissue',
	
	]);
	Route::get('/dashboard/editissue',[
			'uses'=>'AdminController@getEditIssue',
			'as'=>'editissue',
	]);
	Route::get('/dashboard/deleteissue',[
			'uses'=>'AdminController@getDeleteIssue',
			'as'=>'deleteissue',
	]);
	Route::get('/dashboard/dailyreports',[
			'uses'=>'AdminController@getDailyReports',
			'as'=>'dailyreports',
	]);
});


//testing routes
Route::get('/test', function (){
	$developer =Developer::all();
	return View::make('/test/articles')->with('developer', $developer);
});
Route::get('/profile/{username}',function($username){
	
		$user = User::where('name', $username)->first();
		return View::make('/test/profile')->with('user', $user);
});