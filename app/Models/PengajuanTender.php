<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanTender extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_tender';

    protected $fillable = [
        'file', 
        'cust_name',
        'segment',
        'date',
        'layanan',
        'nilai_tender',
        'lokasi_tender',
        'email',
    ];
}
