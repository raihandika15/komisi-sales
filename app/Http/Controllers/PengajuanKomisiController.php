<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PengajuanKomisi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use mysqli;

use function GuzzleHttp\Promise\all;

class PengajuanKomisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PengajuanKomisi()
    {
        return view('pengajuan_komisi');
    }

    public function index()
    {
        $data_pengajuan_komisi = PengajuanKomisi::where('email', Session::get('email'))->get();
        return view('pengajuan_komisi',compact('data_pengajuan_komisi'));
    }
}

