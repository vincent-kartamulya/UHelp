<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shuttles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(1);
            $table->date('tanggalpesan');
            $table->string('sumtanggal');
            $table->string('keperluan');
            $table->string('hari');
            $table->string('JamAnggrek');
            $table->string('TurunDi');
            $table->string('JamAlsut');
            $table->string('NaikDi');
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
        Schema::dropIfExists('shuttles');
    }
};
