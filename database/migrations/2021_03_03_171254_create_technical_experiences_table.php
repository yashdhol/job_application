<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalExperiencesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('technical_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bd_id')->nullable();
            $table->string('technology')->nullable();
            $table->enum('skill', ['', 'beginner', 'Mediator', 'Expert']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('technical_experiences');
    }

}
