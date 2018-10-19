<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTemplateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_template_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');

            $table->unsignedInteger('list_template_id')->nullable();
            $table->foreign('list_template_id')->references('id')->on('list_templates')->onDelete('cascade');

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
        Schema::dropIfExists('list_template_items');
    }
}
