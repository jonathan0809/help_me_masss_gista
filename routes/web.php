<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BerandaController;


use App\Http\Controllers\UserController;
use App\Http\Controllers\listArt;
use App\Http\Controllers\detailProfileController;
use App\Http\Controllers\EditProfilePelController;
use App\Http\Controllers\profilePelangganController;
use App\Http\Controllers\profileUser;
use App\Http\Controllers\profilePekerjaController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ratingController;
use App\Http\Controllers\profileUserController;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\Types\Resource_;

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



Route::group(['middleware' => ['auth']], function () {
Route::group(['middleware' => ['cek_login:Pekerja']], function () {
Route::get('pekerja','App\Http\Controllers\PekerjaHomeController@index')->name('pekerja');
Route::get('/profilpek', [profilePekerjaController::class, 'profilpek']);
Route::get('riwayatDataPek','App\Http\Controllers\RiwayatPekController@index')->name('riwayatDataPek');

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
Route::get('profilpelEdit','App\Http\Controllers\EditProfilePelController@profilpelEdit')->name('profilpelEdit');
Route::get('riwayatDataPel','App\Http\Controllers\RiwayatPelController@index')->name('riwayatDataPel');
Route::get('ratingReview','App\Http\Controllers\ratingController@ratingUlasan')->name('ratingReview');
Route::post('tambah','App\Http\Controllers\ratingController@tambah');
Route::get('getLatitudeForInput','App\Http\Controllers\ratingController@getLatitudeForInput');
Route::get('showModal','App\Http\Controllers\ratingController@showModal');
Route::get('pesan/{username}','App\Http\Controllers\PesanController@pesan')->name('pesan');

});
});
