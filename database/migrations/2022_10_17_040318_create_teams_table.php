<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en', 250)->nullable();
            $table->string('name_bn', 250)->nullable();
            $table->string('title_en', 100)->nullable();
            $table->string('title_bn', 100)->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_bn')->nullable();
            $table->string('team_name_en', 250)->nullable();
            $table->string('team_name_bn', 250)->nullable();
            $table->string('designation_en', 50)->nullable();
            $table->string('designation_bn', 50)->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('github', 50)->nullable();
            $table->string('linkedin', 50)->nullable();
            $table->string('instagram', 50)->nullable();
            $table->string('team_image')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('1=>Active, 0=>Inactive');
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
        Schema::dropIfExists('teams');
    }
}
