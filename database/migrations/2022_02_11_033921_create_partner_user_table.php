<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_user', function (Blueprint $table) {
            $table->BigIncrements('id_partner_user');
            $table->timestamps();
        });
        Schema::table('partner_user', function (Blueprint $table){
            $table->string('user_email_id');
            $table->foreign('user_email_id')->references('email')->on('user');

            $table->string('partners_red_id');
            $table->foreign('partners_red_id')->references('ref_partners_red')->on('partner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_user');
    }
}
