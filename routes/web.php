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

Route::get('/','demandes@index')->name("home");
Route::get('/contact','demandes@contact')->name("contact");
Route::get('/suivi','demandes@suivi')->name("suivi");
Route::POST('/suivi_demande','Demandes@suivi_demande')->name("suivi_demande");
Route::get('/depose','demandes@create')->name("depose");
Route::POST('/save','demandes@save')->name("save");
Route::get('/espase_Admin','demandes@espase_Admin')->name("espase_Admin");
Route::POST('/admin_test','demandes@admin_test')->name("admin_test");
Route::POST('/view','demandes@view')->name("view") ;
Route::POST('/accepte','demandes@accepte')->name("accepte") ;
Route::POST('/refuse','demandes@refuse')->name("refuse") ;
Route::POST('/suivi_demande','Demandes@suivi_demande')->name("suivi_demande") ;
Route::get('/pdf','demandes@pdf')->name("pdf") ;
Route::get('/nav',function (){ return view('layote/nav_admin'); })->name("nav") ;
Route::get('/Admin','demandes@admin')->name("Admin") ;
Route::get('/Admina','demandes@admina')->name("Admina") ;
Route::get('/Adminr','demandes@adminr')->name("Adminr") ;
Route::get('/Admint','demandes@admint')->name("Admint") ;
