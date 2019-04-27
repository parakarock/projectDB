<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->double('User_Citizen',13)->primary()->unique();
            $table->char('User_Name',50);
            $table->char('User_Lname',50);
            $table->date('User_BirthDay');
            $table->char('User_Country',50);
            $table->char('User_Province',50);
            $table->double('User_Post',5);
            $table->char('User_Address',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');
    }
}
