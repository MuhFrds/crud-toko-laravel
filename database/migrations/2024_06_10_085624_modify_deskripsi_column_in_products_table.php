<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDeskripsiColumnInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Mengubah panjang kolom deskripsi menjadi TEXT
            $table->text('deskripsi')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Mengembalikan panjang kolom deskripsi ke VARCHAR(255) jika sebelumnya seperti itu
            $table->string('deskripsi', 255)->change();
        });
    }
}
