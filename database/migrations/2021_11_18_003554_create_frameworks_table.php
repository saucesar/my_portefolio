<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameworksTable extends Migration
{
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_path')->nullable();
            $table->text('description')->nullable();
            
            $table->unsignedInteger('programing_laguage_id');
            $table->foreign('programing_laguage_id')->references('id')->on('programing_laguages');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('frameworks');
    }
}
