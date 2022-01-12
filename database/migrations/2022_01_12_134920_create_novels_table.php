<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description")->nullable(true);
            $table->string("thumb")->nullable(true);
            $table->string("price")->nullable(true);
            $table->string("series")->nullable(true);
            $table->string("saleDate")->nullable(true);
            $table->string("type")->nullable(true);
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
        Schema::dropIfExists('novels');
    }
}
