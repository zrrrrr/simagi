<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameKategoriPeralatanColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_peralatan_gardu_induk', function (Blueprint $table) {
            $table->renameColumn('kategori_peralatan', 'id_kategori_peralatan');
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
            $table->renameColumn('id_kategori_peralatan', 'kategori_peralatan');
        });
    }
}
