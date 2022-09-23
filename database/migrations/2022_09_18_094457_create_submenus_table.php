<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->char('menu_id', 11);
            $table->string('name', 20)->unique();
            $table->string('desc', 40)->nullable();
            $table->string('url', 20)->nullable();
            $table->string('icon', 20)->nullable();
            $table->enum('status', ['Y', 'N']);
            $table->enum('category', ['Y', 'N']);
            $table->integer('level');
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
        Schema::dropIfExists('submenus');
    }
}
