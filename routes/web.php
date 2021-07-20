<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BerandaController;


use App\Http\Controllers\UserController;
use App\Http\Controllers\listArt;


/*
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
    return view('login');
});
Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

//auth -> admin || kasir

Route::group(['middleware' => ['auth']], function () {
// Route::group(['middleware' => ['cek_login:admin']], function () {
Route::get('pelanggan','App\Http\Controllers\PelangganHomeController@index')->name('pelanggan');

Route::get('/beranda_admin/data_user',[UserController::class, 'data_user']);
Route::get('/beranda_admin/form_tambah_user',[UserController::class, 'form_tambah_user']);
Route::post('/tambah_user', [UserController::class, 'create']);
Route::get('/beranda_admin/edit_user/{user:id}', [UserController::class, 'edit']);
Route::patch('/update_user/{user:id}', [UserController::class, 'update']);
Route::get('/hapus_user/{user:id}', [UserController::class, 'delete']);


Route::group(['middleware' => ['cek_login:pelanggan']], function () {
Route::get('pekerja','App\Http\Controllers\PekekerjaHomeController@index')->name('pekerja');
Route::get('listart','App\Http\Controllers\listArtController@listart')->name('listart');
Route::get('listbaby','App\Http\Controllers\listBabyController@listbaby')->name('listbaby');
Route::get('listpengasuh','App\Http\Controllers\listPengasuhController@listPengasuh')->name('listpengasuh');
Route::get('listsecurity','App\Http\Controllers\listSecurityController@listsecurity')->name('listsecurity');
Route::get('listsupir','App\Http\Controllers\listSupirController@listsupir')->name('listsupir');


});
});
