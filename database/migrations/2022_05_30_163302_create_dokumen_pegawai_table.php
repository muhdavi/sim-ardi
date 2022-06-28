<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_pegawai', function (Blueprint $table) {
            $table->foreignId('dokumen_id')
                ->constrained('dokumens')
                ->onUpdate('cascade');
            $table->foreignId('pegawai_id')
                ->constrained('pegawais')
                ->onUpdate('cascade');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade');
            $table->string('file', 100);
            $table->string('nomor', 100)->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->primary(['dokumen_id', 'pegawai_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumen_pegawai');
    }
}
