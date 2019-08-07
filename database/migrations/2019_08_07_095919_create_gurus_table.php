<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('guru_kode')->unique();
            $table->unsignedBigInteger('kompetensi_kode');
            $table->foreign('kompetensi_kode')->references('id')->on('kompetensi_keahlians')->onDelete('CASCADE');
            $table->char('guru_nip');
            $table->string('guru_nama');
            $table->string('guru_alamat');
            $table->integer('guru_telpon');
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
        Schema::dropIfExists('gurus');
    }
}
