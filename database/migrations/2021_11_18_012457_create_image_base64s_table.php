<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageBase64sTable extends Migration
{
    public function up()
    {
        Schema::create('image_base64s', function (Blueprint $table) {
            $table->id();
            $table->string('extension');
            $table->longText('base64');
            $table->morphs('imageable');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('image_base64s');
    }
}
