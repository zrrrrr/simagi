<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNamaGarduToDataPeralatanGarduIndukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_peralatan_gardu_induk', function (Blueprint $table) {
            $table->integer('id_gardu_induk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_peralatan_gardu_induk', function (Blueprint $table) {
            //
        });
    }
}
