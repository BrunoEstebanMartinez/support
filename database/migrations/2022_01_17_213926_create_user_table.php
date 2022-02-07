<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigincrements('user_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('Last_Name');
            $table->string('MLast_Name');
            $table->string('Names');
            $table->integer('bday')->nullable();
            $table->string('bmonth')->nullable();
            $table->integer('byear')->nullable();
            $table->string('Gender')->nullable();
            $table->string('GenerPerson')->nullable();
            $table->string('Phone1')->nullable();
            $table->string('Phone2')->nullable();
            $table->string('Country')->nullable();
            $table->string('State')->nullable();
            $table->integer('PostCode')->nullable();
            $table->text('DirectionH')->nullable();
            
            $table->integer('namelesson')->nullable();
            $table->integer('roleuser');

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
        Schema::dropIfExists('user');
    }
}
