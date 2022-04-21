<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\RekapKomisi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

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

    public function index()
    {
        $data_rekap_komisi = RekapKomisi::where('email', Session::get('email'))->get();
        return view('rekap_komisi', compact('data_rekap_komisi'));
    }

    public function buttonEksport()
    {
        $data_export = RekapKomisi::where('email', Session::get('email'))->get();
        return view('cetak_pdf', compact('data_export'));
    }
}
