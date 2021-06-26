<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bd_id')->nullable();
            $table->string('board_university')->nullable();
            $table->string('year')->nullable();
            $table->string('CGPA_percentage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('education_details');
    }

}
