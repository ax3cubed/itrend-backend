<?php

use App\Http\Controllers\UserTestController;
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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', 'JWTAuthController@register');
    Route::post('login', 'JWTAuthController@login');
    Route::post('logout', 'JWTAuthController@logout');
    Route::post('refresh', 'JWTAuthController@refresh');
    Route::get('profile', 'JWTAuthController@profile');
});

Route::apiResource('user','UserController')->middleware('auth:api');
Route::apiResource('category', 'TopicsController')->middleware('auth:api');
Route::apiResource('question', 'QuestionsController')->middleware('auth:api');
Route::apiResource('user-test','UserTestController')->middleware('auth:api');
Route::get('topic-question/{question_id}','QuestionsController@getQuestionsByTopic')->middleware('auth:api');
Route::get('get-answers','UserTestController@getUserTestByLink')->middleware('auth:api');
Route::get('get-quizzes', 'UserTestController@getUserQuizzes')->middleware('auth:api');
Route::get('result-details','UserTestController@getFriendsResults')->middleware('auth:api');

Route::apiResource('other-test','OtherTestController');

Route::get('get-quizzes/{quizLink}','UserTestController@getQuestionsAndAnswers')->middleware('auth:api');
Route::get('get-questions/{quizLink}','OtherTestController@getQuestionsByQuizLink');
Route::apiResource('other-test','OtherTestController');
Route::get('friend-score','OtherTestController@getFriendScore');
Route::get('all-scores','OtherTestController@getScoresByQuiz');
