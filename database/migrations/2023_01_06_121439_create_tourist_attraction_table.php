<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristAttractionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_attractions', function (Blueprint $table) {
            $table->id();
            $table->string('attraction_no', 20)->unique()->nullable();
            $table->foreignId('tourist_attraction_category_id')->nullable()->constrained('tourist_attraction_categories')->onDelete('set null');
            // $table->foreignId('destination_folder_id')->nullable()->constrained('destination_folders')->onDelete('set null');
            $table->boolean('is_popular')->nullable();
            $table->boolean('is_status')->nullable();
            $table->boolean('is_folder')->nullable();
            $table->string('name_th', 100)->nullable();
            $table->string('name_en', 100)->nullable();
            $table->string('detail_th')->nullable();
            $table->string('detail_en')->nullable();
            $table->string('sub_district', 70)->nullable();
            $table->string('district', 70)->nullable();
            $table->string('province', 70)->nullable();
            $table->string('postcode', 5)->nullable();
            $table->string('map_link')->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->string('travel_th')->nullable();
            $table->string('travel_en')->nullable();
            $table->string('season_recommend_th', 30)->nullable();
            $table->string('season_recommend_en', 30)->nullable();
            $table->longText('description_th')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('cover_image')->nullable();
            $table->integer('view')->nullable(false)->default(0);
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
        Schema::dropIfExists('tourist_attractions');
    }
}
