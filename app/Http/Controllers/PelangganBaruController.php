<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganBaru;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PelangganBaruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PelangganBaru()
    {
        return view('pelanggan_baru');
    }

    public function DataPelangganBaru()
    {
        $data_pelanggan_baru=PelangganBaru::where('email', Session::get('email'))->get();
        return view('pelanggan_baru', compact('data_pelanggan_baru'));
    }
}
