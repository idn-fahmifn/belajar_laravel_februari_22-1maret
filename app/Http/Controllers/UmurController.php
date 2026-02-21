<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function form()
    {
        return view('umur.form');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:20'],
            'umur' => ['required', 'integer', 'min:5', 'max:50'],
        ], [
            'nama.required' => "Kolom nama wajib diisi.",
            'nama.string' => "Jenis data yang kamu masukan tidak valid.",
            'nama.min' => "Nama minimal 3 karakter.",
            'nama.max' => "Nama maksimal 20 karakter.",

            'umur.required' => "Kolom umur wajib diisi.",
            'umur.integer' => "Jenis data yang kamu masukan tidak valid.",
            'umur.min' => "Umur minimal 5 tahun.",
            'umur.max' => "Umur maksimal 50 tahun.",
        ]);


        // session untuk nilai agar bisa diperiksa oleh middleware.
        $request->session()->put('age', $request->input('umur'));

        return redirect()->route('sukses.umur');

    }

    public function sukses()
    {
        return view('umur.sukses');
    }


}
