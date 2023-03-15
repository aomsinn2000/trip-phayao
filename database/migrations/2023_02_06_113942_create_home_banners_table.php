<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_banners', function (Blueprint $table) {
            $table->id();
            $table->string('home_no', 10)->unique()->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_status')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->string('name', 60)->nullable();
            $table->timestamp('start_date', 0)->nullable();
            $table->timestamp('end_date', 0)->nullable();
            $table->string('creator', 50)->nullable();
            $table->string('editor', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_banners');
    }
}
