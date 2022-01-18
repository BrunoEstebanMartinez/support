<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigincrements('id_student');
            $table->text('SLast_Name');
            $table->text('SMLast_Name');
            $table->text('SNames');
            $table->integer('Years_Old');
            $table->text('UsernameCreate');
            $table->text('SE-Mail');
            $table->text('SPassword');
            $table->text('SConfirmation');
            $table->text('Country');
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
        Schema::dropIfExists('student');
    }
}
