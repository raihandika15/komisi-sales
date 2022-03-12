<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class PengajuanKomisiStartController extends Controller
{
    public function insertData(Request $request)
    {   
        $dataAL = DB::table('pengajuan_komisi')->where('no_al', $request->input('id'))->get();

        foreach ($dataAL as $dataAttach) {
            # code...
            DB::table('pengajuan_komisi_attach')->insert(
                [
                    'name' => $dataAttach->owner,
                    'email' => $dataAttach->email,
                    'department' => $dataAttach->department,
                    'attachment' => $dataAttach->no_al,
                    'manajer_note' => $request->manajer_note,
                    'hrd_note' => $request->hrd_note,
                    'proses' => $request->proses,
                    'pa_id' => $dataAttach->no_pa,
                    'date_submit' => Carbon::now(),
                    'date_approve' => $request->date('date_approve'),
                    'file' => $request->file('file'),
                ]);
        }
        return redirect('/home')->with('Success', 'Data berhasil disubmit');
        // dd($dataAL);
    }
}
