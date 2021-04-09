<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuttesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luttes', function (Blueprint $table) {
            $table->id();
            $table->integer('ovinbelierfk');
            $table->date('datedebut');
            $table->date('datefin');
            $table->foreign('ovinbelierfk')
                ->references('id')
                ->on('ovins')
                ->onDelete('cascade');
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
        Schema::dropIfExists('luttes');
    }
}
