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

Route::get('images-upload', 'HomeController@imagesUpload');
Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

Route::get('/show', 'DemoController@index');
Route::post('/upload', 'DemoController@uploadFile');

Route::get('/', 'PagesController@index');

Route::get('/articles/', 'ArticlesController@index');

Route::get('/articles/{id}', [
	'as'   =>'article.show',
	'uses' =>'ArticlesController@show'
 ]);


Auth::routes();

Route::get('/search', 'SearchController@getSearch');
Route::post('/search/name', 'SearchController@getSearchAjax')->name('search');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function(){

		Route::group(['prefix'=>'FAQ'],function(){
	//admin/FAQ/FAQ
				Route::get('FAQ', 'AdminController@getFAQ');

				Route::get('sua/{id}', 'AdminController@getSua');
				Route::post('sua/{id}', 'AdminController@postSua');


				Route::get('them', 'AdminController@getThem');
				Route::post('them', 'AdminController@postThem');

				Route::get('xoa/{id}', 'AdminController@getXoa');
		});

		Route::group(['prefix'=>'ErrList'],function(){
	//admin/ErrList/List
				Route::get('List', 'ErrlistsController@getErrList');

				Route::get('sua/{id}', 'ErrlistsController@getSua');
				Route::post('sua/{id}', 'ErrlistsController@postSua');


				Route::get('them', 'ErrlistsController@getThem');
				Route::post('them', 'ErrlistsController@postThem');

				Route::get('xoa/{id}', 'ErrlistsController@getXoa');
		});

		Route::group(['prefix'=>'Member'],function(){
	//admin/Member/Member
				Route::get('Member', 'UsersController@getThanhVien');

				Route::get('sua/{id}', 'UsersController@getSua');
				Route::post('sua/{id}', 'UsersController@postSua');
				
				Route::get('xoa/{id}', 'UsersController@getXoa');
		});
});

