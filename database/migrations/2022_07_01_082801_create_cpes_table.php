<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpes', function (Blueprint $table) {
            $table->id();
            $table->string('zone')->nullable();
            $table->string('serial_number')->nullable();
            $table->date('tarikh')->nullable();
            $table->string('customer')->nullable();
            $table->string('gambar')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('cpes');
    }
}
