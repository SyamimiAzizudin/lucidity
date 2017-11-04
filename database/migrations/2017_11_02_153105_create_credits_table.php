<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ICN');
            $table->string('recipient');
            $table->string('sender');
            $table->string('f27');
            $table->string('f40A');
            $table->string('f20');
            $table->string('f23')->nullable();
            $table->string('f31C')->nullable();
            $table->string('f40E');
            $table->string('f31D');
            $table->string('f51a')->nullable();
            $table->string('f50');
            $table->string('f59');
            $table->string('f32B');
            $table->string('f39A')->nullable();
            $table->string('f39B')->nullable();
            $table->string('f39C')->nullable();
            $table->string('f41a');
            $table->string('f42C')->nullable();
            $table->string('f42a')->nullable();
            $table->string('f42M')->nullable();
            $table->string('f42P')->nullable();
            $table->string('f43P')->nullable();
            $table->string('f43T')->nullable();
            $table->string('f44A')->nullable();
            $table->string('f44E')->nullable();
            $table->string('f44F')->nullable();
            $table->string('f44B')->nullable();
            $table->string('f44C')->nullable();
            $table->string('f44D')->nullable();
            $table->string('f45A')->nullable();
            $table->string('f46A')->nullable();
            $table->string('f47A')->nullable();
            $table->string('f71B')->nullable();
            $table->string('f48')->nullable();
            $table->string('f49');
            $table->string('f53a')->nullable();
            $table->string('f78')->nullable();
            $table->string('f57a')->nullable();
            $table->string('f72')->nullable();
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
        Schema::dropIfExists('credits');
    }
}
