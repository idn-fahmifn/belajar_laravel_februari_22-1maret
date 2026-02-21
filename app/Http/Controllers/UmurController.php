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
        ]);

        return $request;
    }
}
