<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfusis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('id_penerima')
            ->references('id')
            ->on('penerimas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('jumlah');
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
        Schema::dropIfExists('transfusis');
    }
}
