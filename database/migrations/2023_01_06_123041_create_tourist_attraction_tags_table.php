<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristAttractionTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_attraction_tags', function (Blueprint $table) {
            $table->unsignedInteger('order')->default(0);
            $table->foreignId('tourist_attraction_id')->nullable()->constrained('tourist_attractions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tag_id')->nullable()->constrained('tags')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['tourist_attraction_id','tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourist_attraction_tags');
    }
}
