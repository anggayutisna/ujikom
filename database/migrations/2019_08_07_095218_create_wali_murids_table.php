<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaliMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_murids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('wali_id')->unique();
            $table->unsignedBigInteger('siswa_nisn');
            $table->foreign('siswa_nisn')->references('id')->on('siswas')->onDelete('CASCADE');
            $table->string('wali_nama_ayah');
            $table->string('wali_pekerjaan_ayah');
            $table->string('wali_nama_ibu');
            $table->string('wali_nama_pekerjaan_ibu');
            $table->string('wali_alamat');
            $table->integer('wali_telpon');
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
        Schema::dropIfExists('wali_murids');
    }
}
