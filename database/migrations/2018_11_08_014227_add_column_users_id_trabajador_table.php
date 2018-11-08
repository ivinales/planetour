<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsersIdTrabajadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('trabajador', function (Blueprint $table) {
        $table->integer('users_id')->unsigned();
        $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trabajador', function (Blueprint $table) {
        $table->dropForeign('trabajador_users_id_foreign');
         $table->dropColumn('users_id');
        });  
    }
}
