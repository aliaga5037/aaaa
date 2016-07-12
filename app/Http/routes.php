<?php

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
use App\Category;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/categories', 'HomeController@cat');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::post('/profile' , 'HomeController@update_avatar');
Route::get('/users', 'HomeController@users');
Route::delete('/user/{user}' , 'HomeController@destroy');
Route::patch('/user/{user}/edit' , 'HomeController@update');
Route::get('/{user}/myQuestions' , 'HomeController@myques');

Route::resource('/cat' , 'CategoryController');
Route::resource('/{category}/question' , 'QuestionController');
Route::resource('{question}/answer' , 'AnswerController');



Route::get('/adminPage', 'VerifyController@admin');
Route::get('/admin/tables', 'VerifyController@tables');
Route::get('/admin/cats', 'VerifyController@cats');
Route::get('/user/{user}/questions', 'VerifyController@questions');
Route::get('/{user}/ques/{question}/edit', 'VerifyController@questionsEdit');
Route::patch('/user/{user}/question/{question}', 'VerifyController@questionsUpdate');
Route::delete('/question/{question}', 'VerifyController@quesDel');




	




// Route::get('/', function () {
//     return view('admin.index');
// });
// Route::get('/', function () {
//     return view('admin.index');
// });
