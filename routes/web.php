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


Route::get('/','HomeController@index'); 

Route::get('/admin','AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/companys','User\HomeController@companydetail')->name('home.company_detail');

Route::get('/users','User\HomeController@userdetail')->name('home.user_detail');

//Viec Lam

Route::resources(['vieclam' => 'ViecLamController']);

Route::get('/job','ViecLamController@show_job')->name('jobs');

//Nha Tuyen Dung

Route::get('/tuyendung','NhaTuyenDungController@index')->name('tuyendung');

Route::resources(['nhatuyendung' => 'NhaTuyenDungController']);

//Nguoi Dung
Route::get('/regis', 'User\HomeController@register')->name('home.register');
Route::get('singin', 'User\HomeController@singin')->name('home.singin');

Route::get('/nguoidung','NguoiDungController@index')->name('nguoidung');

Route::resources(['nguoidung' => 'NguoiDungController']);

