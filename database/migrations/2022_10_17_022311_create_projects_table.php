<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->nullable();
            $table->integer('submenu_id')->nullable();
            $table->string('name_en', 250)->nullable();
            $table->string('name_bn', 250)->nullable();
            $table->string('title_en', 250)->nullable();
            $table->string('title_bn', 250)->nullable();
            $table->string('short_title_en', 200)->nullable();
            $table->string('short_title_bn', 200)->nullable();
            $table->string('client_name', 100)->nullable();
            $table->string('duration', 100)->nullable();
            $table->string('location', 100)->nullable();
            $table->string('slug', 100);
            $table->string('project_name_en', 250)->nullable();
            $table->string('project_name_bn',250)->nullable();
            $table->text('project_description_en')->nullable();
            $table->text('project_description_bn')->nullable();
            $table->string('button_name_en', 50)->nullable();
            $table->string('button_name_bn', 50)->nullable();
            $table->dateTime('launch_date');
            $table->boolean('switch');
            $table->softDeletes();
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
        Schema::dropIfExists('projects');
    }
}
