<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganBaru;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
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

    public function insertPelanggan(Request $request)
    {
        $dataID = DB::table('pelanggan_baru')->where('id_cust', $request->input('id'))->get();
        foreach ($dataID as $dataAttachPelanggan) {
            # code...
            DB::table('pengajuan_pelanggan_attach')->insert(
                [
                    'name' => $dataAttachPelanggan->owner,
                    'email' => $dataAttachPelanggan->email,
                    'department' => $dataAttachPelanggan->department,
                    'attachment' => $dataAttachPelanggan->id_cust,
                    'manajer_note' => $request->manajer_note,
                    'hrd_note' => $request->hrd_note,
                    'proses' => $request->proses,
                    'pa_id' => $dataAttachPelanggan->no_pa,
                    'date_submit' => Carbon::now(),
                    'date_approve' => $request->date('date_approve'),
                    'file' => $request->file('file'),
                ]);
        }
        return redirect('/homme');

        // dd($dataID);
    }
}
