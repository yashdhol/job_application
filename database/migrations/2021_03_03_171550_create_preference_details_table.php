<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferenceDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('preference_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bd_id')->nullable();
            $table->string('preferred_location')->nullable();
            $table->decimal('expected_CTC')->nullable();
            $table->decimal('current_CTC')->nullable();
            $table->string('notice_period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('preference_details');
    }

}
