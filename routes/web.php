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

// route profil
Route::get('/profil/selayang-pandang', 'ProfilController@SelayangPandang');
Route::get('/profil/visi-misi', 'ProfilController@VisiMisi');
Route::get('/profil/struktur-organisasi', 'ProfilController@StrukturOrganisasi');

// route kontak
Route::get('/kontak', 'KontakController@Kontak');

// route galeri
Route::get('/galeri', 'GaleriController@Galeri');

// route dokumen
Route::get('/dokumen/peraturan-daerah', 'DokumenController@PeraturanDaerah');