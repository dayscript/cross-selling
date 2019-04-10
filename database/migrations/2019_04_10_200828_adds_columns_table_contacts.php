<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddsColumnsTableContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('correo_agente')->after('correo_director');
            $table->string('cedula_correcta')->after('correo_director');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function($table) {
            $table->dropColumn('correo_agente');
            $table->dropColumn('cedula_correcta');
        });
    }
}
