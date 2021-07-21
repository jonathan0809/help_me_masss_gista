<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BerandaController;


use App\Http\Controllers\UserController;
use App\Http\Controllers\listArt;
use App\Http\Controllers\detailProfileController;
use App\Http\Controllers\EditProfilePelController;
use App\Http\Controllers\profilePelangganController;
use App\Http\Controllers\profileUser;
use App\Http\Controllers\profileUserController;
use Illuminate\Support\Facades\App;

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
Route::group(['middleware' => ['cek_login:Pekerja']], function () {
Route::get('pekerja','App\Http\Controllers\PekekerjaHomeController@index')->name('pekerja');


// Route::get('/beranda_admin/data_user',[UserController::class, 'data_user']);
// Route::get('/beranda_admin/form_tambah_user',[UserController::class, 'form_tambah_user']);
// Route::post('/tambah_user', [UserController::class, 'create']);
// Route::get('/beranda_admin/edit_user/{user:id}', [UserController::class, 'edit']);
// Route::patch('/update_user/{user:id}', [UserController::class, 'update']);
// Route::get('/hapus_user/{user:id}', [UserController::class, 'delete']);
});


Route::group(['middleware' => ['cek_login:Pelanggan']], function () {
Route::get('pelanggan','App\Http\Controllers\PelangganHomeController@index')->name('pelanggan');

Route::get('listart','App\Http\Controllers\listArtController@listart')->name('listart');
Route::get('listbaby','App\Http\Controllers\listBabyController@listbaby')->name('listbaby');
Route::get('listpengasuh','App\Http\Controllers\listPengasuhController@listPengasuh')->name('listpengasuh');
Route::get('listsecurity','App\Http\Controllers\listSecurityController@listsecurity')->name('listsecurity');
Route::get('listsupir','App\Http\Controllers\listSupirController@listsupir')->name('listsupir');
Route::get('/profiledetailpekerja/{user:id}', [detailProfileController::class, 'profileDetailPekerja']);
Route::get('/profilpel', [profilePelangganController::class, 'profilpel']);
Route::get('tentangkami','App\Http\Controllers\tentangKamiController@index')->name('tentangkami');
Route::get('editProfilePel','App\Http\Controllers\EditProfilePelController@profilpelEdit')->name('editProfilePel');
// Route::get('/editProfilePel/{user:id}', [EditProfilePelController::class, 'editProfilePel']);




});
});
