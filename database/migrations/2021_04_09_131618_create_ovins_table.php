<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ovins', function (Blueprint $table) {
            $table->id();
            $table->integer('numeleveur');
            $table->integer('numtravail');
            $table->date('datenaiss');
            $table->string('pere');
            $table->string('mere');
			$table->string('remarque');
            $table->string('mereadopt');
            $table->rememberToken();
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
        Schema::dropIfExists('ovins');
    }
}
