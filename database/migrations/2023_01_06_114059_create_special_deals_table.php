<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_deals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('special_deal_category_id')->nullable()->constrained('special_deal_categories')->onDelete('set null');
            $table->string('deal_no', 20)->unique()->nullable();
            $table->boolean('is_popular')->nullable();
            $table->boolean('is_status')->nullable();
            $table->string('name_th', 150)->nullable();
            $table->string('name_en', 150)->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('discount')->nullable();
            $table->string('discount_type', 10)->nullable();
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->timestamp('start_date', 0)->nullable();
            $table->timestamp('end_date', 0)->nullable();
            $table->longText('description_th')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('condition_th')->nullable();
            $table->longText('condition_en')->nullable();
            $table->string('cover_image')->nullable();
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
        Schema::dropIfExists('special_deals');
    }
}
