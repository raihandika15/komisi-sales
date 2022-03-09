<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanKomisiStart;
use App\Http\Controllers\Controller;

class PengajuanKomisiStartController extends Controller
{
    public function insertData()
    {
        $data_pengajuan_komisi = New PengajuanKomisiStart();
        if (isset($_POST['submit'])) {
            $data_pengajuan_komisi = $_POST['id'];

            for($i = 0; $i < count($data_pengajuan_komisi); $i++){
                echo $pengajuan[$i];
                // mysqli_query("INSERT INTO pengajuan_komisi_start WHERE id=".$_POST['submit']['$i']);
            }
        }
        return redirect('/home');

        // $myCheckboxes = $request->input('id');
        // dd($myCheckboxes);
    }
}
