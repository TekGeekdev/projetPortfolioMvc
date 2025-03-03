<?php

use App\Controllers\Utilisateur;
use App\Controllers\Article;
use App\Routes\Route;


Route::get('/utilisateur/create', 'UtilisateurController@create');
Route::post('/utilisateur/create', 'UtilisateurController@store');
Route::get('/utilisateur/show', 'UtilisateurController@show');
Route::get('/utilisateur/edit', 'UtilisateurController@edit');
Route::post('/utilisateur/edit', 'UtilisateurController@update');
Route::post('/utilisateur/delete', 'UtilisateurController@delete');


Route::get('/article/create', 'ArticleController@create');
Route::get('/article/create', 'ArticleController@store');

// Route::get('/', 'HomeController@index');
// Route::get('/home', 'HomeController@index');
// Route::get('/about', 'HomeController@about');
// Route::get('/contact', 'HomeController@contact');
// Route::get('/product', 'HomeController@product');




// Route::get('/clients', 'ClientController@index');
// Route::get('/client/create', 'ClientController@create');
// Route::post('/client/create', 'ClientController@store');
// Route::get('/client/show', 'ClientController@show');
// Route::get('/client/edit', 'ClientController@edit');
// Route::post('/client/edit', 'ClientController@update');
// Route::post('/client/delete', 'ClientController@delete');

// Route::get('/user', 'UserController@index');
// Route::get('/user/create', 'UserController@create');
// Route::post('/user/create', 'UserController@store');
// Route::get('/user/show', 'UserController@show');
// Route::get('/user/edit', 'UserControllerr@edit');
// Route::post('/user/edit', 'UserController@update');
// Route::post('/user/delete', 'UserController@delete');

Route::dispatch();