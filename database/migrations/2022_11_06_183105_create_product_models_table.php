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
        Schema::create('product_models', function (Blueprint $table) {
            $table->increments("id");    
            $table->string("pname")->nullable();
            $table->string("pdesh")->nullable();
            $table->string("cat")->nullable();
            $table->string("scat")->nullable();
            $table->string("price");
            $table->integer("status")->comments("1 for active 2 for inactiv");
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
        Schema::dropIfExists('product_models');
    }
};
