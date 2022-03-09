<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanManual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_manual', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->text('cust_name');
            $table->string('no_pa');
            $table->string('no_al');
            $table->string('ar_type');
            $table->text('layanan');
            $table->string('kapasitas');
            $table->text('address_ori');
            $table->text('address_term');
            $table->string('baa_id');
            $table->string('no_dok');
            $table->integer('price_lama');
            $table->integer('biaya_sewa');
            $table->integer('biaya_instal');
            $table->integer('biaya_deactive');
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
        Schema::dropIfExists('pengajuan_manual');
    }
}
