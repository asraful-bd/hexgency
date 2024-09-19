<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('offers')) {
            Schema::create('offers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name_en', 250)->nullable();
                $table->string('slug', 250);
                $table->string('title_en', 250)->nullable();
                $table->string('regular_price')->nullable();
                $table->unsignedTinyInteger('status')->default(1)->comment('1=>Active, 0=>Inactive');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
