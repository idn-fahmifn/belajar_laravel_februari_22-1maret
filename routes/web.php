<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// menampilkan sebuah respon yang ada pada alamat localhost:8000/profile


Route::prefix('user')->group(function () {
    Route::get('biodata', function () {
        return "Biodata pada grup user";
    });

    // pindahan dari luar
    Route::get('profile', function () {
        $data = 'Nama saya Fahmi';
        return view('profile', compact('data'));
    })->name('halaman-profile');

});


// Route::post('profile', function () {
//     return "hallo";
// });


// Route Parameter 
Route::get('barang/{param}', function ($parameter) {

    return "ini adalah detail barang " . $parameter;

});

// optional parameter
Route::get('location/{param?}', function ($parameter = 'belum didefiniskan') {

    $lokasi = $parameter;
    return view('halaman', compact('lokasi'));

})->name('lokasi');