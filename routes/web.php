<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/user/{id}','UserController@show')
    ->where('id','[0-9]+');

Route::get('/profile','UserController@index')->name('profile');

Route::get('/heroes','HeroController@index')->name('heroes');

Route::get('/matches','MatchController@index')->name('matches');

Route::get('/matches/{id}','MatchController@show')
    ->where('id', '[0-9]+');

Route::post('commentnew','CommentController@store')->name('commentnew');

Route::post('votesnew','VoteController@store')->name('votesnew');

Route::post('changeavatar','UserController@chooseAvatar')->name('changeavatar');

Route::get('newlineup','LineupController@create')->name('newlineup');

Route::get('/lineups','LineupController@index')->name('lineups');

Route::get('/lineups/{id}','LineupController@show')
    ->where('id', '[0-9]+');

Route::post('lineupcommentnew','LineupCommentController@store')->name('lineupcommentnew');

Route::post('lineupvotesnew','LineupVoteController@store')->name('lineupvotesnew');

Route::post('lineupnewstore','LineupController@store');