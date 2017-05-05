<?php



Route::get('/', 'PagesController@index');
Route::get('/contribute/{id}', 'PagesController@contribute');
Route::post('/contribute', 'LandslideController@add');
Route::get('/view/{id}', 'LandslideController@view');
Route::get('/discover', 'PagesController@discover');
Route::get('/understand', 'PagesController@understand');
Route::get('/search', 'SearchController@search');
Route::get('/register', 'PagesController@register');
Route::post('/register', 'AccountController@createAccount');
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@getLogin');
Route::get('/photo/{id}', 'PagesController@photo');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/logout', 'LoginController@logout');