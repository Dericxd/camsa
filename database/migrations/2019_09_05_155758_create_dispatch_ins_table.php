<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispatchInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch_ins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('productId');
            $table->string('description');
            $table->bigInteger('quantity');
            $table->string('presentationProduct');
            $table->bigInteger('total');
            $table->string('code');
            $table->date('dateOut');
            $table->date('dateIn');
            $table->string('responsible');
            $table->text('observation');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispatch_ins');
    }
}
