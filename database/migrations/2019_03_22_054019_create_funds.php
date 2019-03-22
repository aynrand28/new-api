<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

   
           public function up()
    {
        Schema::create('Tbl_funds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Fund Code');
            $table->string('description');
            $table->softDeletes();	
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
        Schema::dropIfExists('Tbl_funds');
    }
}
