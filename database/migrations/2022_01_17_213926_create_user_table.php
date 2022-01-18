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
            $table->text('E_Mail');
            $table->text('Password');
            $table->text('Confirmation');
            $table->text('Last_Name');
            $table->text('MLast_Name');
            $table->text('Names');
            $table->integer('bday')->nullable();
            $table->text('bmonth')->nullable();
            $table->integer('byear')->nullable();
            $table->text('Gender')->nullable();
            $table->text('GenerPerson')->nullable();
            $table->text('Phone1')->nullable();
            $table->text('Phone2')->nullable();
            $table->text('Country');
            $table->text('State')->nullable();
            $table->integer('PostCode')->nullable();
            $table->text('DirectionH')->nullable();
            $table->integer('namelesson');
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
