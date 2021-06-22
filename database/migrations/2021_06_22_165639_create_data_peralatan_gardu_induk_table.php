<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPeralatanGarduIndukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_peralatan_gardu_induk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_peralatan');
            $table->integer('kategori_peralatan');
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
        Schema::dropIfExists('data_peralatan_gardu_induk');
    }
}
