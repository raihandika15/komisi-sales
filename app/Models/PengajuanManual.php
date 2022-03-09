<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanManual extends Model
{
    use HasFactory;

    protected $table='pengajuan_manual';

    protected $fillable = [
        'file', 
        'cust_name', 
        'no_pa', 
        'no_al', 
        'ar_type', 
        'layanan', 
        'kapasitas', 
        'address_ori', 
        'address_term',
        'baa_id',
        'no_dok',
        'price_lama',
        'biaya_sewa',
        'biaya_instal',
        'biaya_deactive',
        'email',
    ];
}
