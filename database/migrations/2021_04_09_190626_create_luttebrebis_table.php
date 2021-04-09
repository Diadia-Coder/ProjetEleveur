<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuttebrebisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luttebrebis', function (Blueprint $table) {
            $table->id();
            $table->integer('luttefk');
            $table->foreign('luttefk')
                ->references('id')
                ->on('luttes')
                ->onDelete('cascade');
            $table->integer('ovbrebisfk');
            $table->foreign('ovbrebisfk')
                ->references('id')
                ->on('ovins')
                ->onDelete('cascade');
            $table->date('datemarquage');
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
        Schema::dropIfExists('luttebrebis');
    }
}
