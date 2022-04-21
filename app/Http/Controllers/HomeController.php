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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function destroy()
    {
        DB::table('pengajuan_komisi_attach')->where('id', $id)->delete();
    }

    public function showData()
    {
        $pengajuan_komisi = PengajuanKomisiStart::where('email', Session::get('email'))->get();
        $pengajuan_manual = PengajuanManual::where('email', Session::get('email'))->get();
        $pengajuan_tender = PengajuanTender::where('email', Session::get('email'))->get();
        $pelanggan_baru = DB::table('pengajuan_pelanggan_attach')->where('email', Session::get('email'))->get();

        $rekapMaret = RekapKomisi::where('email', Session::get('email'))->get();
        $totalJan=0;
        $totalFeb=0;
        $totalMar=0;
        $totalApr=0;
        $totalMei=0;
        $totalJun=0;
        $totalJul=0;
        $totalAgu=0;
        $totalSep=0;
        $totalOkt=0;
        $totalNov=0;
        $totalDes=0;
        foreach($rekapMaret as $r){
            $date=strtotime($r->period_pembayaran);
            
            if(date('n',$date)==1){
                $totalJan=$totalJan+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };

            if(date('n',$date)==2){
                $totalFeb=$totalFeb+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };

            if(date('n',$date)==3){
                $totalMar=$totalMar+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };

            if(date('n',$date)==4){
                $totalApr=$totalApr+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };

            if(date('n',$date)==5){
                $totalMei=$totalMei+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
            if(date('n',$date)==6){
                $totalJun=$totalJun+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
            if(date('n',$date)==7){
                $totalJul=$totalJul+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
            if(date('n',$date)==8){
                $totalAgu=$totalAgu+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
            if(date('n',$date)==9){
                $totalSep=$totalSep+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
            if(date('n',$date)==10){
                $totalOkt=$totalOkt+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
            if(date('n',$date)==11){
                $totalNov=$totalNov+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
            if(date('n',$date)==12){
                $totalDes=$totalDes+$r->nilai_komisi+$r->nilai_pelangganBaru+$r->nilai_tender;
            };
        };
        
        return view('home', compact(['pengajuan_manual','pengajuan_tender','pengajuan_komisi','pelanggan_baru',
                                    'totalJan', 'totalFeb','totalMar', 'totalApr', 'totalMei','totalJun','totalJul',
                                    'totalAgu','totalSep','totalOkt','totalNov','totalDes']));
    }

}
