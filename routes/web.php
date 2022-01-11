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
Route::get('/profil/selayang-pandang', function() {
    return view('SelayangPandang', ["title" => 'Profil']);
});
Route::get('/profil/visi-misi', function() {
    return view('VisiMisi', ["title" => 'Profil']);
});
Route::get('/profil/struktur-organisasi', function() {
    return view('StrukturOrganisasi', ["title" => 'Profil']);
});

// route kontak
Route::get('/kontak', function() {
    return view('Kontak', ["title" => 'Kontak']);
});

// route galeri
Route::get('/galeri', function() {
    return view('Galeri', ["title" => 'Galeri']);
});