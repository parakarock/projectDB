<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Brand', function (Blueprint $table) {
            $table->bigIncrements('Brand_ID');
            $table->char('Brand_Name',100);
            $table->char('Brand_Genaration',150);
            $table->double('Brand_Year',4);
            $table->char('Brand_Type',150);
            $table->char('Brand_Motor',150);
            $table->char('Brand_Gas',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Brand');
    }
}
