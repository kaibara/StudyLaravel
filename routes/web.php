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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/edit','User\EditController@edit');
Route::post('/home/edit','User\EditController@return_check');
Route::get('/home/edit_check','User\EditController@edit');
Route::post('/home/edit_check','User\EditCheckController@edit_check');
Route::get('/home/edit_finish','User\EditController@edit');
Route::post('/home/edit_finish','User\EditFinishController@finish');

Route::get('/home/entry','User\EntryController@entry');
Route::post('/home/entry','User\EntryController@return_entry');
Route::get('/home/entry_check','User\EntryController@entry');
Route::post('/home/entry_check','User\EntryCheckController@entry_check');
Route::get('/home/entry_finish','User\EntryController@entry');
Route::post('/home/entry_finish','User\EntryFinishController@entry_finish');

Route::get('/home/search','User\SearchController@search');
Route::post('/home/search','User\SearchController@return_search');
Route::get('/home/result','User\SearchController@search');
Route::post('/home/result','User\ResultController@result');

Route::get('/admin', 'AdminController@admin');

Route::get('/admin/user/entry','User\EntryController@entry');
Route::post('/admin/user/entry','User\EntryController@return_entry');
Route::get('/admin/user/entry_check','User\EntryController@entry');
Route::post('/admin/user/entry_check','User\EntryCheckController@entry_check');
Route::get('/admin/user/entry_finish','User\EntryController@entry');
Route::post('/admin/user/entry_finish','User\EntryFinishController@entry_finish');

Route::get('/admin/user/edit','AdminController@admin');
Route::post('/admin/user/edit','User\EditController@admin');
Route::get('/admin/user/edit_check','User\EditController@admin');
Route::post('/admin/user/edit_check','User\EditCheckController@edit_check');
Route::post('/admin/user/edit_return','User\EditController@return_check');
Route::get('/admin/user/edit_finish','User\EditController@admin');
Route::post('/admin/user/edit_finish','User\EditFinishController@finish');

Route::get('/admin/user/delete_check','AdminController@admin');
Route::post('/admin/user/delete_check','User\DeleteCheckController@delete_check');
Route::get('/admin/user/delete_finish','AdminController@admin');
Route::post('/admin/user/delete_finish','User\DeleteFinishController@delete_finish');

Route::get('/admin/works/entry','Works\EntryController@entry');
Route::post('/admin/works/entry','Works\EntryController@return_entry');
Route::get('/admin/works/entry','Works\EntryController@entry');
Route::post('/admin/works/entry_check','Works\EntryCheckController@entry_check');
Route::get('/admin/works/entry','Works\EntryController@entry');
Route::post('/admin/works/entry_finish','Works\EntryFinishController@entry_finish');

Route::get('/admin/works/edit','AdminController@admin');
Route::post('/admin/works/edit','Works\EditController@edit');
Route::post('/admin/works/edit_return','Works\EditController@return_edit');
Route::get('/admin/works/edit_check','AdminController@admin');
Route::post('/admin/works/edit_check','Works\EditCheckController@edit_check');
Route::get('/admin/works/edit_finish','AdminController@admin');
Route::post('/admin/works/edit_finish','Works\EditFinishController@edit_finish');

Route::get('/admin/works/delete_check','AdminController@admin');
Route::post('/admin/works/delete_check','Works\DeleteCheckController@delete_check');
Route::get('/admin/works/delete_finish','AdminController@admin');
Route::post('/admin/works/delete_finish','Works\DeleteFinishController@delete_finish');

Route::get('/confirm_form/','ConfirmForm\ConfirmFormController@index');
Route::post('/confirm_form/confirm/','ConfirmForm\ConfirmFormController@confirm');
Route::post('/confirm_form/complete/','ConfirmForm\ConfirmFormController@complete');
