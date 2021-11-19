<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnologyProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('tecnology_projects', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            $table->unsignedInteger('tecnology_id');
            $table->foreign('tecnology_id')->references('id')->on('tecnologies');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tecnology_projects');
    }
}
