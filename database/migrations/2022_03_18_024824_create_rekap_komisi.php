<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapKomisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_komisi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('departmen');
            $table->string('target_bulanan');
            $table->string('realisasi_bulanan');
            $table->integer('nilai_deaktivasi');
            $table->integer('after_deaktivasi');
            $table->integer('nilai_komisi');
            $table->integer('jumlah_pelangganBaru');
            $table->string('list_pelangganBaru');
            $table->integer('nilai_pelangganBaru');
            $table->integer('jumlah_tender');
            $table->integer('nilai_tender');
            $table->integer('total_dibayarkan');
            $table->date('period_pembayaran');
            $table->date('period_klaim');
            $table->string('keterangan');
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
        Schema::dropIfExists('rekap_komisi');
    }
}
