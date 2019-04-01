<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key', 8);
            $table->string('tipo_documento');
            $table->string('id_tomador')->unique();
            $table->string('nombre');
            $table->string('celular')->nullable();
            $table->string('correo')->nullable();
            $table->string('director');
            $table->string('celular_director');
            $table->string('correo_director');
            $table->boolean('envio_form');
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
        Schema::dropIfExists('contacts');
    }
}
