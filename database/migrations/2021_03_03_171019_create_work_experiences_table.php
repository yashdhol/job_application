<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkExperiencesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bd_id')->nullable();
            $table->string('company');
            $table->string('designation');
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('work_experiences');
    }

}
