<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanKomisiStart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_komisi_start', function (Blueprint $table) {
            $table->id();
            $table->string('no_pa');
            $table->string('ar_type');
            $table->text('cust_name');
            $table->string('segmen');
            $table->date('ba_date');
            $table->date('active_date');
            $table->date('deactive_date');
            $table->integer('sid');
            $table->text('layanan');
            $table->integer('quality');
            $table->string('bandwith');
            $table->integer('biaya_deactive');
            $table->integer('biaya_sewa');
            $table->integer('biaya_instal');
            $table->integer('biaya_relok');
            $table->text('address_ori');
            $table->text('address_term');
            $table->string('owner');
            $table->string('baa_id');
            $table->integer('price_lama');
            $table->integer('sid_lama');
            $table->string('no_al');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_komisi_start');
    }
}
