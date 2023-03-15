<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolderTouristAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folder_tourist_attractions', function (Blueprint $table) {
            $table->foreignId('destination_folder_id')->constrained('destination_folders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tourist_attraction_id')->constrained('tourist_attractions')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['destination_folder_id', 'tourist_attraction_id'])->name('dft_attractions');
            // $table->primary(['destination_folder_id', 'tourist_attraction_id'], 'dft_attractions');
            // $table->primary(['destination_folder_id', 'tourist_attraction_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folder_tourist_attractions');
    }
}
