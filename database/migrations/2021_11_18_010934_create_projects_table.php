<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->text('github_url')->nullable();
            
            $table->unsignedInteger('programing_language_id');
            $table->foreign('programing_language_id')->references('id')->on('programing_languages');

            $table->unsignedInteger('framework_id')->nullable();
            $table->foreign('framework_id')->references('id')->on('frameworks');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
