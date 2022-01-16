<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->bigincrements('id_teacher');
            $table->text('E_Mail');
            $table->text('Password');
            $table->text('Confirmation');
            $table->text('Last_Name');
            $table->text('MLast_Name');
            $table->text('Names');
            $table->integer('bday');
            $table->text('bmonth');
            $table->integer('byear');
            $table->text('Gender');
            $table->text('GenerPerson')->nullable();
            $table->text('Phone1');
            $table->text('Phone2')->nullable();
            $table->text('Country');
            $table->text('State');
            $table->integer('PostCode');
            $table->text('DirectionH');
            $table->integer('namelesson')->nullable();

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
        Schema::dropIfExists('teacher');
    }
}
