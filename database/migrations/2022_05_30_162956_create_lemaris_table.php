<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLemarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lemaris', function (Blueprint $table) {
            $table->id();
            $table->char('lemari', 3);
            $table->string('keterangan', 100)->nullable();
            $table->foreignId('rel_id')
                ->constrained('rels')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lemaris');
    }
}
