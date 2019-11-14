<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number');
            $table->date('date');
            $table->string('businessName');
            $table->string('rif');
            $table->string('contactPhone');
            $table->unsignedBigInteger('driverId');
            $table->string('driverCi');
            $table->unsignedBigInteger('carName');
            $table->string('typeCar');
            $table->text('direction');
            $table->unsignedBigInteger('productId');
            $table->bigInteger('quantityProduct');
            $table->string('descriptionProduct');
            $table->string('presentationProduct');
            $table->bigInteger('totalProduct');
            $table->string('sealNumber');
            $table->text('observations');
            $table->string('authorized');
            $table->string('responsable');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('driverId')->references('id')->on('drivers');
            $table->foreign('productId')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_guides');
    }
}
