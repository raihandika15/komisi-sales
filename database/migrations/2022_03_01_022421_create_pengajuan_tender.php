<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_tender', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->text('cust_name');
            $table->string('segment');
            $table->date('date');
            $table->string('layanan');
            $table->integer('nilai_tender');
            $table->string('lokasi_tender');
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
        Schema::dropIfExists('pengajuan_tender');
    }
}
