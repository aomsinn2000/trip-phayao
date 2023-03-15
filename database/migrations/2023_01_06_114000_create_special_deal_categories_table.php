<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialDealCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_deal_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_no', 20)->unique()->nullable();
            $table->string('name_th', 100)->nullable();
            $table->string('name_en', 100)->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_status')->nullable();
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
        Schema::dropIfExists('special_deal_categories');
    }
}
