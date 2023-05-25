<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->boolean("sumtanggal")->default("1");
            $table->date('departdate')->default(DB::raw('CURRENT_DATE'));
            $table->string("keperluan")->nullable();
            // $table->foreignId("user_id")->references("id")->on("users");
            $table->string("hari")->nullable();
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
