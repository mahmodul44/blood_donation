<?php

use Illuminate\Support\Facades\Route;

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

Route::get('index','FrontController@index')->name('index');
Route::get('about','FrontController@about')->name('about');
Route::get('whyblood_donar','FrontController@whyblood_donar')->name('whyblood_donar');
Route::get('bedonar','FrontController@bedonar')->name('bedonar');
Route::get('search_donar','FrontController@search_donar')->name('search_donar');
Route::get('front_gallery','FrontController@front_gallery')->name('front_gallery');
Route::get('contact','FrontController@contact')->name('contact');
Route::post('front_bedonarinsert','BedonarController@front_bedonarinsert')->name('front_bedonarinsert');
Route::post('contact','ContactController@contact')->name('contact');
Route::get('view_donar','FrontController@view_donar')->name('view_donar');
Route::get('search','FrontController@search')->name('search');

Route::get('dashboard_admin','HomeController@dashboard_admin')->name('dashboard_admin');
Route::get('galleryadd','GalleryController@galleryadd')->name('galleryadd');
Route::post('galleryinsert','GalleryController@galleryinsert')->name('galleryinsert');
Route::get('gallerylist','GalleryController@gallerylist')->name('gallerylist');
Route::get('gallerydelete/{id}','GalleryController@gallerydelete')->name('gallerydelete');

Auth::routes();
Route::get('userlist','FrontController@userlist')->name('userlist');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile','HomeController@profile')->name('profile');
Route::get('profile_edit','HomeController@profile_edit')->name('profile_edit');
Route::post('profile_update','RegisterController@profile_update')->name('profile_update');
Route::get('profile_delete','HomeController@profile_delete')->name('profile_delete');
Route::get('bloodadd','HomeController@bloodadd')->name('bloodadd');
Route::post('bloodinsert','BloodController@bloodinsert')->name('bloodinsert');
Route::get('bloodlist','BloodController@bloodlist')->name('bloodlist');

Route::get('editblood_info/{id}','BedonarController@editblood_info')->name('editblood_info');
Route::post('updateblood_info/{id}','BedonarController@updateblood_info')->name('updateblood_info');
Route::get('deleteblood_info/{id}','BedonarController@deleteblood_info')->name('deleteblood_info');

Route::get('Bpositive','BedonarController@Bpositive')->name('Bpositive');
Route::get('Apositive','BedonarController@Apositive')->name('Apositive');
Route::get('Opositive','BedonarController@Opositive')->name('Opositive');
Route::get('ABpositive','BedonarController@ABpositive')->name('ABpositive');
Route::get('Anegative','BedonarController@Anegative')->name('Anegative');

Route::get('Bnegative','BedonarController@Bnegative')->name('Bnegative');
Route::get('messageshow','ContactController@messageshow')->name('messageshow');
Route::get('messagedelete/{id}','ContactController@messagedelete')->name('messagedelete');
