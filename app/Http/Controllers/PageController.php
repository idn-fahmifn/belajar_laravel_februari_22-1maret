<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // fungction untuk menampilkan halaman index dari sebuah halaman.
    public function firstPage()
    {
        return "Hallo ini adalah halaman pertama saya";
    }

    public function secondPage()
    {
        return response()->json();

    }

}
