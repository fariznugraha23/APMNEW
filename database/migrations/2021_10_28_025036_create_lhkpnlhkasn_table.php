<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLhkpnlhkasnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhkpnlhkasn', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('link_dokumen');
            $table->integer('status');
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
        Schema::dropIfExists('lhkpnlhkasn');
    }
}
