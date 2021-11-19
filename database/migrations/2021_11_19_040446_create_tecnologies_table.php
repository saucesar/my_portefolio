<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnologiesTable extends Migration
{
    public function up()
    {
        Schema::create('tecnologies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_path');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tecnologies');
    }
}
