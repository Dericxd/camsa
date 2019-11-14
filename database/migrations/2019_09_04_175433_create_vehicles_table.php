<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->string('img')->nullable();
            $table->string('type');
            $table->string('plate');
            $table->enum('state',['disponible','ocupado'])->default('disponible');
            $table->enum('status',['disponible','ocupado','reparacion'])->default('disponible');
            $table->unsignedBigInteger('driverId')->default(1)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('driverId')->references('id')->on('drivers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
