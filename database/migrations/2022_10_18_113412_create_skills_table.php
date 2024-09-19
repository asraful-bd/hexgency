<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en',250)->nullable();
            $table->string('name_bn',250)->nullable();
            $table->string('title_en', 250)->nullable();
            $table->string('title_bn', 250)->nullable();
            $table->string('slug', 250);
            $table->string('skill_name_en', 250)->nullable();
            $table->string('skill_name_bn', 250)->nullable();
            $table->string('skill_percen_en', 100)->nullable();
            $table->string('skill_percen_bn', 100)->nullable();
            $table->string('button_name_en', 50)->nullable();
            $table->string('button_name_bn', 50)->nullable();
            $table->string('skill_image')->nullable();
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
        Schema::dropIfExists('skills');
    }
}
