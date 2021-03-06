<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
  return View::make('welcome');
});

Route::get('people', array(
  'as' => 'people', 
  'uses' => 'PeopleController@index'
));


Route::post('people', array(
  'as' => 'people', 
  'uses' => 'PeopleController@store'
));
