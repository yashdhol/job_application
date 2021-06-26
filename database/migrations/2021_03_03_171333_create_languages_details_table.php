<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('languages_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bd_id')->nullable();
            $table->string('languages')->nullable();
            $table->boolean('is_read')->default(0);
            $table->boolean('is_write')->default(0);
            $table->boolean('is_speck')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('languages_details');
    }

}
