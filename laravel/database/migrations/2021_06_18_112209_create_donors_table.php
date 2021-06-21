<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('id_pendonor')
            ->references('id')
            ->on('pendonors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('id_waktu')
            ->references('id')
            ->on('waktus')
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
        Schema::dropIfExists('donors');
    }
}
