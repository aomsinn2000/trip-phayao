<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_folders', function (Blueprint $table) {
            $table->id();
            $table->string('folder_no', 20)->unique()->nullable();
            $table->boolean('is_status')->nullable();
            $table->string('name_th', 100)->nullable();
            $table->string('name_en', 100)->nullable();
            $table->text('slogan_th')->nullable();
            $table->text('slogan_en')->nullable();
            $table->string('sub_district', 70)->nullable();
            $table->string('district', 70)->nullable();
            $table->string('province', 70)->nullable();
            $table->string('postcode', 5)->nullable();
            $table->longText('detail_th')->nullable();
            $table->longText('detail_en')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('link')->nullable();
            $table->string('creator', 50)->nullable();
            $table->string('editor', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destination_folders');
    }
}
