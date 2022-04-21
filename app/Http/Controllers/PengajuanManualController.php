<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanManual;
use Illuminate\Routing\Controller;

class PengajuanManualController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PengajuanManual()
    {
        return view('pengajuan_manual');
    }

    public function startPengajuan(Request $request)
    {
        $pengajuan = New PengajuanManual();

        $pengajuan->file = request('file');
        $pengajuan->name = request('name');
        $pengajuan->cust_name = request('cust_name');
        $pengajuan->no_pa = request('no_pa');
        $pengajuan->no_al = request('no_al');
        $pengajuan->ar_type = request('ar_type');
        $pengajuan->layanan = request('layanan');
        $pengajuan->kapasitas = request('kapasitas');
        $pengajuan->address_ori = request('address_ori');
        $pengajuan->address_term = request('address_term');
        $pengajuan->baa_id = request('baa_id');
        $pengajuan->no_dok = request('no_dok');
        $pengajuan->price_lama = request('price_lama');
        $pengajuan->biaya_sewa = request('biaya_sewa');
        $pengajuan->biaya_instal = request('biaya_instal');
        $pengajuan->biaya_deactive = request('biaya_deactive');
        $pengajuan->email = request('email');

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file_pengajuan_komisi';
        $file->move($tujuan_upload,$nama_file);

        $pengajuan->save();

        return redirect('/home');
    }
}
