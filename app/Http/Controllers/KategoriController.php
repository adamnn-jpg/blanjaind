<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\SubKategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // CATATAN
        // N + 1 Problem
        // $subKategoris = SubKategori::all();

        // MENCEGAH N + 1
        // $subKategoris = SubKategori::with('kategori')->get();

    }
}
