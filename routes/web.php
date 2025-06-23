<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
return view('profil');
});

Route::get(
    '/pasien',
    [ App\Http\Controllers\PasienController::class, 'list' ]
    );

Route::get(
        '/pemeriksaan',
        [ App\Http\Controllers\PemeriksaanController::class, 'list' ]
        );

Route::get(
    '/pasien/{id}',
    [ App\Http\Controllers\PemeriksaanController::class, 'list_pasien' ]
    );

Route::get(
    '/pemeriksaan/{id}',
    [ App\Http\Controllers\PemeriksaanController::class, 'detail' ]
    );
