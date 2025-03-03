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


Route::get('/', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::post('/article/create', 'ArticleController@store');
Route::get('/article/show', 'ArticleController@show');
Route::get('/article/edit', 'ArticleController@edit');
Route::post('/article/edit', 'ArticleController@update');
Route::get('/article/delete', 'ArticleController@delete');


Route::dispatch();