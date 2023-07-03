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
            $table->boolean("sumtanggal");
            $table->date("departdate");
            $table->string("keperluan");
            $table->foreignId("user_id")->references("id")->on("users");
            // $table->foreignId("user_id")->default(1);
            $table->string("hari");
            $table->string("jamAnggrek")->nullable();
            $table->string("turun")->nullable();
            $table->string("jamAlsut")->nullable();
            $table->string("naik")->nullable();
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
