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

// REALTIONSHIP CHECK CODE //
Route::get('/test', function(){
    return App\Models\Post::find(8)->tags;
});

// dynamic project section start //
Route::get('/','FrontEndController@index')->name('index');
Route::get('/posts/{slug}','FrontEndController@singlePost')->name('post.single');
Route::get('/categorys/{id}','FrontEndController@category')->name('post.category');
Route::get('/tags/{id}','FrontEndController@tag')->name('post.tag');
Route::get('/search','FrontEndController@search')->name('post.search');
Route::get('/user','FrontEndController@user')->name('post.user');
// dynamic project section end //


Route::group(['middleware'=>['auth:sanctum', 'verified']], function(){
// START DASHBOARD SECTION //
Route::get('/dashboard','DashboardController@index')->name('dashboard');
// START CATEGORY SECTION //
Route::get('/category/create_category','CategoryController@create')->name('create.category');
Route::post('/category/store_category','CategoryController@store')->name('store.category');
Route::get('/category/all_category','CategoryController@index')->name('all.category');
Route::get('/category/edit_category/{id}','CategoryController@edit')->name('edit.category');
Route::post('/category/update_category/{id}','CategoryController@update')->name('update.category');
Route::get('/category/del_category/{id}','CategoryController@destroy')->name('delete.category');
Route::get('/category_active/{id}','CategoryController@active')->name('category.active');
Route::get('/category_inactive/{id}','CategoryController@inactive')->name('category.in_active');
// START POST SECTION //
Route::get('/post/create_post','PostController@create')->name('create.post');
Route::post('/post/store_post','PostController@store')->name('store.post');
Route::get('/post/all_post','PostController@index')->name('all.post');
Route::get('/post/edit_post/{id}','PostController@edit')->name('edit.post');
Route::post('/post/update_post/{id}','PostController@update')->name('update.post');
Route::get('/post/trash_post/{id}','PostController@destroy')->name('trash.post');
Route::get('/post/trashed_post','PostController@trashed')->name('trashed.post');
Route::get('/post/restore_post/{id}','PostController@restore')->name('restore.post');
Route::get('/post/kill_post/{id}','PostController@kill')->name('kill.post');
// START TAG SECTION //
Route::get('/tag/create_tag','TagController@create')->name('create.tag');
Route::post('/tag/store_tag','TagController@store')->name('store.tag');
Route::get('/tag/all_tag','TagController@index')->name('all.tag');
Route::get('/tag/edit_tag/{id}','TagController@edit')->name('edit.tag');
Route::post('/tag/update_tag/{id}','TagController@update')->name('update.tag');
Route::get('/tag/delete_tag/{id}','TagController@destroy')->name('delete.tag');
// START USER SECTION //
Route::get('/user/create_user','UserController@create')->name('create.user');
Route::post('/user/store_user','UserController@store')->name('store.user');
Route::get('/user/all_user','UserController@index')->name('all.user');
Route::get('/user/delete_user/{id}','UserController@destroy')->name('delete.user');
Route::get('/user/admin/{id}','UserController@admin')->name('user.admin');
Route::get('/user/not_amdmin/{id}','UserController@not_admin')->name('user.not.admin');
Route::get('/user/password_change','UserController@password_change')->name('password.change');
Route::post('/user/password_update/{id}','UserController@password_update')->name('password.update');
// START SITE SETTING INFO SECTION //
Route::get('/setting/create_setting','SettingController@create')->name('create.setting');
Route::post('/setting/store_setting','SettingController@store')->name('store.setting');
Route::get('/setting/all_setting','SettingController@index')->name('all.setting');
Route::get('/setting/edit_setting/{id}','SettingController@edit')->name('edit.setting');
Route::post('/setting/update_setting/{id}','SettingController@update')->name('update.setting');
Route::get('/setting/delete_setting/{id}','SettingController@destroy')->name('delete.setting');

});
/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
