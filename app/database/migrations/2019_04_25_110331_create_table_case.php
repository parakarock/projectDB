<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Case', function (Blueprint $table) {
            $table->bigIncrements('Case_ID');
            $table->char('Case_Detail',200);
            $table->char('Case_WhoName',100);
            $table->double('Case_Phone',10);
            $table->char('OwnerCar',6);
            $table->bigInteger('Station')->unsigned();
            $table->timestamp('Case_Date');
            
            $table->foreign('OwnerCar')->references('Car_Licence')->on('Car');
            $table->foreign('Station')->references('Station_ID')->on('PoliceStation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Case');
    }
}
