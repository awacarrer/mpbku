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

Route::get('/','HomeController@index')
    ->name('home');

Route::get('/contact','ContactController@index')
    ->name('contact');

Route::get('/profile','ProfileController@index')
    ->name('profile');

Route::get('/peng_barang','PengbarangController@index')
    ->name('pengiriman_barang');

Route::get('/tracking_area','trackingareaController@index')
    ->name('tracking_area');

Route::get('/informasi_biaya','informasibiayaController@index')
    ->name('informasi_biaya');

Route::get('/list_pengiriman','listpengirimanController@index')
    ->name('list_pengiriman');

Route::get('/detail_pengiriman','detailpengirimanController@index')
    ->name('detail_pengiriman');

Route::get('/layanan', 'layananController@index')
    ->name('layanan');

Route::get('/status_pengiriman/{id}', 'StatusPengirimanController@index')
    ->name('status_pengiriman');

Route::get('/cek_barang', 'CekBarangController@index')
    ->name('cek_barang');


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')
        ->name('dashboard');
        Route::resource('user', 'UserController');
        Route::resource('pengiriman-barang', 'PengirimanBarangController');
        Route::resource('pelanggan', 'PelangganController');
        Route::resource('tracking-area', 'TrackingAreaController');
        Route::resource('driver', 'DriverController');
        Route::resource('detail-barang', 'DetailBarangController');
        Route::get('detail-barang/create/{id}', 'DetailBarangController@create');
        // Route::resource('status-pengiriman', 'StatusPengirimanController');
        
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);
 