<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table b', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_demarage');
            $table->date('date_fin');
            $table->string('description');
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
        Schema::dropIfExists('table b');
        Schema::create ('tableau' ,function (Blueprint $table)
        {
            $table->id();
            $table->string('nom');
            $table->date('date_demarage');
            $table->date('date_fin');
            $table->string('description');
            $table->timestamps();
        });
            
        
    }
}
