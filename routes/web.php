<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/preets', 'PreetController@index')->name('home');
    Route::post('/preets', 'PreetController@store');
    Route::post('/profiles/{user:username}/follow', 'FollowsController@store');
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit');
    Route::patch('/profiles/{user:username}', 'ProfilesController@update');
    Route::get('/profiles', "ProfilesController@showall")->name('profiles');
    Route::get('/profiles/show', 'ProfilesController@showname')->name('profileshow');
    Route::get('/schedules', 'ScheduleController@show')->name('schedules');
    Route::get('/schedules/all', 'ScheduleController@show_all')->name('schedulesall');
    Route::get('schedules/create', 'ScheduleController@create')->name('schedulescreate');
    Route::post('schedules/create', 'ScheduleController@store')->name('schedulestore');
    Route::get('schedules/{id}/delete', 'ScheduleController@destroy');
    Route::post('/preets/{preet}/like', 'PreetLikesController@store');
    Route::delete('/preets/{preet}/like', 'PreetLikesController@destroy');
    Route::get('/preets/liked', 'PreetController@showLiked')->name('likedpreets');
});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');

require __DIR__ . '/auth.php';
