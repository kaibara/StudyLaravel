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
Route::post('/home/edit_check','User\EditCheckController@check');
Route::get('/home/edit_finish','User\EditController@edit');
Route::post('/home/edit_finish','User\EditFinishController@finish');

Route::get('/home/search','User\SearchController@search');
Route::post('/home/search','User\SearchController@return_search');
Route::get('/home/result','User\SearchController@search');
Route::post('/home/result','User\ResultController@result');

Route::get('/admin', 'AdminController@admin');

Route::get('/admin/user/edit','AdminController@admin');
Route::post('/admin/user/edit','User\EditController@admin');
Route::post('/admin/user/edit_return','User\EditController@return_check');
Route::get('/admin/user/edit_check','User\EditController@edit');
Route::post('/admin/user/edit_check','User\EditCheckController@check');
Route::get('/admin/user/edit_finish','User\EditController@edit');
Route::post('/admin/user/edit_finish','User\EditFinishController@finish');

// Route::get('/user/entry','UserEntryController@getindex');
// Route::post('/user/entry','UserEntryController@postindex');
// Route::get('/user/entry_check','UserEntryCheckController@getindex');
// Route::post('/user/entry_check','UserEntryCheckController@postindex');
// Route::get('/user/entry_finish','UserEntryFinishController@getindex');
// Route::post('/user/entry_finish','UserEntryFinishController@postindex');



// Route::get('/detail','DetailController@getindex');
// Route::post('/detail','DetailController@postindex');

// Route::get('/login','LoginController@getindex');
// Route::post('/login','LoginController@postindex');

// //ユーザー画面(ログイン)
// Route::get('/mypage','MypageController@getindex');
// Route::post('/mypage','MypageController@postindex');

// Route::get('/user/edit','UserEditController@getindex');
// Route::post('/user/edit','UserEditController@postindex');
// Route::get('/user/edit_check','UserEditCheckController@getindex');
// Route::post('/user/edit_check','UserEditCheckController@postindex');
// Route::get('/user/edit_finish','UserEditFinishController@getindex');
// Route::post('/user/edit_finish','UserEditFinishController@postindex');

// //管理画面
// Route::get('/admin','AdminController@getindex');

// //管理画面(ユーザー)
// Route::get('/delete','UserDeleteController@getindex');
// Route::post('/delete','UserDeleteController@postindex');
// Route::get('/delete_finish','UserDeleteFinishController@getindex');
// Route::post('/delete_finish','UserDeleteFinishController@postindex');

// //管理画面(職種)
// Route::get('/work/entry','WorkEntryController@getindex');
// Route::post('/work/entry','WorkEntryController@postindex');
// Route::get('/work/entry_check','WorkEntryCheckController@getindex');
// Route::post('/work/entry_check','WorkEntryCheckController@postindex');
// Route::get('/work/entry_finish','WorkEntryFinishController@getindex');
// Route::post('/work/entry_finish','WorkEntryFinishController@postindex');

// Route::get('/work/edit','WorkEditController@getindex');
// Route::post('/work/edit','WorkEditController@postindex');
// Route::get('/work/edit_check','WorkEditCheckController@getindex');
// Route::post('/work/edit_check','WorkEditCheckController@postindex');
// Route::get('/work/edit_finish','WorkEditFinishController@getindex');
// Route::post('/work/edit_finish','WorkEditFinishController@postindex');

// Route::get('/work/delete','WorkDeleteController@getindex');
// Route::post('work/delete','WorkDeleteController@postindex');
// Route::get('/work/delete_finish','WorkDeleteFinishController@getindex');
// Route::post('/work/delete_finish','WorkDeleteFinishController@postindex');
