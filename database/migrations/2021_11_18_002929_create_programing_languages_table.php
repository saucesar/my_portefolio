<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramingLanguagesTable extends Migration
{
    public function up()
    {
        Schema::create('programing_languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programing_languages');
    }
}
