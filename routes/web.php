<?php

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

Route::get('/','Demandes@index')->name("home");
Route::get('/contact','Demandes@contact')->name("contact");
Route::get('/suivi','Demandes@suivi')->name("suivi");
Route::POST('/suivi_demande','Demandes@suivi_demande')->name("suivi_demande");
Route::get('/depose','Demandes@create')->name("depose");
Route::POST('/save','Demandes@save')->name("save");
Route::get('/Admin','Demandes@display')->name("display");
Route::POST('/view','Demandes@view')->name("view") ;
Route::POST('/accepte','Demandes@accepte')->name("accepte") ;
Route::POST('/refuse','Demandes@refuse')->name("refuse") ;
Route::POST('/suivi_demande','Demandes@suivi_demande')->name("suivi_demande") ;
Route::get('/pdf','Demandes@pdf')->name("pdf") ;