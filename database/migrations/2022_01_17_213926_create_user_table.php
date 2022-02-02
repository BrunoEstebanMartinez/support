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
            $table->bigincrements('id_user');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('password_confirmation')->nullable();
            $table->text('Last_Name')->nullable();
            $table->text('MLast_Name')->nullable();
            $table->text('Names')->nullable();
            $table->integer('bday')->nullable();
            $table->text('bmonth')->nullable();
            $table->integer('byear')->nullable();
            $table->text('Gender')->nullable();
            $table->text('GenerPerson')->nullable();
            $table->text('Phone1')->nullable();
            $table->text('Phone2')->nullable();
            $table->text('Country')->nullable();
            $table->text('State')->nullable();
            $table->integer('PostCode')->nullable();
            $table->text('DirectionH')->nullable();
            
            $table->integer('namelesson')->nullable();
            $table->integer('roleuser')->nullable();

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
