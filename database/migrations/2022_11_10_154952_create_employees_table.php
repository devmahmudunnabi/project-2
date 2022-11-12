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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments("id");
            $table->string("fname");
            $table->string("lname");
            $table->string("nid")->nullable();
            $table->string("address")->nullable();
            $table->string("phone")->nullable();
            $table->string("email");
            $table->integer("status")->comments("1 for active 2 for inactive ");
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
        Schema::dropIfExists('employees');
    }
};
