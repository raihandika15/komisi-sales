<?php

namespace App\Http\Controllers;

use App\Models\PengajuanTender;
use Illuminate\Http\Request;

class PengajuanTenderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PengajuanTender()
    {
        return view('pengajuan_tender');
    }

    public function startPengajuanTender(Request $request)
    {
        $pengajuan_tender = New PengajuanTender();

        $pengajuan_tender->file = request('file');
        $pengajuan_tender->name = request('name');
        $pengajuan_tender->cust_name = request('cust_name');
        $pengajuan_tender->segment = request('segment');
        $pengajuan_tender->date = request('date');
        $pengajuan_tender->layanan = request('layanan');
        $pengajuan_tender->nilai_tender = request('nilai_tender');
        $pengajuan_tender->lokasi_tender = request('lokasi_tender');
        $pengajuan_tender->email = request('email');

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file_pengajuan_tender';
        $file->move($tujuan_upload,$nama_file);

        $pengajuan_tender->save();

        return redirect('/home');
    }
}
