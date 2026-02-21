<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UmurController;
use App\Http\Middleware\AgeMiddleware;
use Illuminate\Http\Request;
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

/**
 * name wajib di deklarasikan di method : 
 * get
 * post
 * put/patch
 * delete
 */


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

Route::post('send-location', function(Request $request){

// tampilkan request pada respon : 
// dd($request);

return $request;

})->name('send.location');

Route::get('first-page', [PageController::class, 'firstPage'])->name('first');
Route::get('second-page', [PageController::class, 'secondPage'])->name('second');

Route::get('/report-barang', [BarangController::class, 'reportBarang'])->name('barang.report');

Route::get('form-umur', [UmurController::class, 'form'])->name('form.umur'); //menampilkan halaman form
Route::post('proses-umur', [UmurController::class, 'proses'])->name('proses.umur'); //proses data input
Route::middleware(AgeMiddleware::class)->get('sukses', [UmurController::class, 'sukses'])->name('sukses.umur'); //kmenampilkan halaman sukses
