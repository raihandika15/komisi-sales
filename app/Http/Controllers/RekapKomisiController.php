<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapKomisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function RekapKomisi()
    {
        return view('rekap_komisi');
    }
}
