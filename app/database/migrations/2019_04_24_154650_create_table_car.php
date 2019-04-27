<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('Car', function (Blueprint $table) {
            $table->char('Car_Licence',6)->primary()->unique();
            $table->char('Car_Color',50);
            $table->date('Car_Outday');
            $table->bigInteger('Brand')->unsigned();
            $table->double('User',13)->unsigned();

            $table->foreign('Brand')->references('Brand_ID')->on('Brand');
            $table->foreign('User')->references('User_Citizen')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Car');
    }
}
