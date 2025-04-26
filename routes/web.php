<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ListProductController;

Route::get('/welcome', function () {
    return view('welcome');
});
 
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
 });

 Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
 });

 // Route::get('/listbarang/{id}/{nama}', function($id, $nama){
 //     return view('list_barang', compact('id', 'nama'));
 // });

 Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);

 Route::get('/loginregister', [LoginRegisterController::class, 'index']);

 Route::get('/profil', [ProfilController::class, 'index']);

 Route::get('/list_product', [ListProductController::class, 'index']);
