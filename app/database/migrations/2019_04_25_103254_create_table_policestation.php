<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePolicestation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PoliceStation', function (Blueprint $table) {
            $table->bigIncrements('Station_ID');
            $table->char('Station_Name',50);
            $table->char('Station_Province',50);
            $table->double('Station_Post',5);
            $table->double('Station_Phone',10);
            $table->char('Station_Address',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PoliceStation');
    }
}
