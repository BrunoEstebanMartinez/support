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
            $table->text('Last_Name');
            $table->text('MLast_Name');
            $table->integer('bday');
            $table->text('bmonth');
            $table->integer('byear');
            $table->text('Gender');
            $table->text('E-Mail');
            $table->text('Password');
            $table->text('Confirmation');
            $table->text('Phone1');
            $table->text('Phone2');
            $table->text('Country');
            $table->text('State');
            $table->integer('PostCode');
            $table->text('DirectionH');

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
