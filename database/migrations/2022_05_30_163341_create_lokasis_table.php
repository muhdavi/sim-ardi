<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rak_id')
                ->constrained('raks')
                ->onUpdate('cascade');
            $table->foreignId('pegawai_id')
                ->nullable()
                ->constrained('pegawais')
                ->onUpdate('cascade');
            $table->char('lokasi', 6);
            $table->unsignedInteger('nomor_urut');
            $table->string('keterangan', 100)->nullable();
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
        Schema::dropIfExists('lokasis');
    }
}
