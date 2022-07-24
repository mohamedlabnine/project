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
Route::get('/contact/{lang}','demandes@contact')->name("contact");
Route::get('/suivi/{lang}','demandes@suivi')->name("suivi");
Route::POST('/suivi_demande/{lang}','Demandes@suivi_demande')->name("suivi_demande");
Route::get('/depose/{lang}','demandes@create')->name("depose");
Route::POST('/save','demandes@save')->name("save");
Route::get('/espase_Admin/{lang}','demandes@espase_Admin')->name("espase_Admin");
Route::POST('/admin_test/{lang}','demandes@admin_test')->name("admin_test");
Route::POST('/view','demandes@view')->name("view") ;
Route::POST('/accepte','demandes@accepte')->name("accepte") ;
Route::POST('/refuse','demandes@refuse')->name("refuse") ;
Route::POST('/suivi_demande','Demandes@suivi_demande')->name("suivi_demande") ;
Route::get('/pdf','demandes@pdf')->name("pdf") ;
Route::get('/admin/{lang}','demandes@admin')->name("Admin") ;
Route::get('/admina/{lang}','demandes@admina')->name("Admina") ;
Route::get('/adminr/{lang}','demandes@adminr')->name("Adminr") ;
Route::get('/admint/{lang}','demandes@admint')->name("Admint") ;
Route::get('/deconnexion/{lang}' , 'demandes@deconnexion')->name("deconexion");

Route::POST('/add','Actualites@ajoute_article')->name("add");

Route::get('/{lang?}','Actualites@getnew')->name("langue");
