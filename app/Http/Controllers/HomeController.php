<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanManual;
use App\Models\PengajuanTender;
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

    public function destroy($id)
    {
        $pengajuan_tender = PengajuanTender::findOrFail($id);
        $pengajuan_tender->delete();

        return redirect('/home')->with('success', 'Data berhasil dihapus');
    }

    public function showData()
    {
        $pengajuan_manual = PengajuanManual::where('email', Session::get('email'))->get();
        $pengajuan_tender = PengajuanTender::where('email', Session::get('email'))->get();
        return view('home', compact(['pengajuan_manual','pengajuan_tender']));
    }
}
