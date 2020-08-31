<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->string('desc');
            $table->string('engine');
            $table->string('rate_output');
            $table->string('rate_tongue');
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
        Schema::dropIfExists('car_specifications');
    }
}
