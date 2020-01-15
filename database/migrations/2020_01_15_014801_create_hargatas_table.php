<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hargatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_tas');
            $table->text('jenis_tas');
            $table->text('bahan_tas');
            $table->integer('harga_tas');
            $table->string('foto');
            $table->string('slug');
            $table->unsignedBigInteger('bahan_id');
            $table->foreign('bahan_id')->references('id')->on('bahantas');
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
        Schema::dropIfExists('hargatas');
    }
}
