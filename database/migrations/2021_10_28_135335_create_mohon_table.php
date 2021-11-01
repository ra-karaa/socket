<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemohon');
            $table->string('ktp_pemohon');
            $table->string('alamat_pemohon');
            $table->string('phone_pemohon');
            $table->string('email_pemohon');
            $table->longtext('info_pemohon');
            $table->longtext('alasan_pemohon');
            $table->string('nama_pengguna');
            $table->string('ktp_pengguna');
            $table->string('alamat_pengguna');
            $table->string('phone_pengguna');
            $table->string('email_pengguna');
            $table->longtext('info_pengguna');
            $table->longtext('alasan_pengguna');
            $table->string('cara');
            $table->string('format');
            $table->string('ambil');
            $table->string('status');
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
        Schema::dropIfExists('mohon');
    }
}
