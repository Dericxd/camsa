<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispatchOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch_outs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->unsignedBigInteger('productId');
            $table->bigInteger('quantity');
            $table->string('presentationProduct');
            $table->bigInteger('total');
            $table->string('code');
            $table->date('dateOut');
            $table->string('responsible');
            $table->string('observation');
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
        Schema::dropIfExists('dispatch_outs');
    }
}
