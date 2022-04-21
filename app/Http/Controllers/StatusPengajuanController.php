<?php

namespace App\Http\Controllers;

use App\Models\PengajuanKomisiStart;
use Illuminate\Http\Request;
use App\Models\PengajuanManual;
use App\Models\PengajuanTender;
use App\Models\RekapKomisi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StatusPengajuanController extends Controller
{
    public function index()
    {
        return view('status_pengajuan');
    }
    
    public function showDataPengajuan()
    {
        $pengajuan_komisi = PengajuanKomisiStart::where('email', Session::get('email'))->get();
        $pengajuan_manual = PengajuanManual::where('email', Session::get('email'))->get();
        $pengajuan_tender = PengajuanTender::where('email', Session::get('email'))->get();
        $pelanggan_baru = DB::table('pengajuan_pelanggan_attach')->where('email', Session::get('email'))->get();

        return view('status_pengajuan', compact(['pengajuan_komisi','pengajuan_manual','pengajuan_tender','pelanggan_baru']));
    }

}
