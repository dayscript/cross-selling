<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_documento')->nullable();
            $table->string('cedula')->unique();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('celular')->nullable();
            $table->string('correo')->nullable();
            $table->boolean('salud')->nullable();
            $table->boolean('vida')->nullable();
            $table->boolean('hogar')->nullable();
            $table->boolean('autos')->nullable();
            $table->boolean('terminos_condiciones');
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
        Schema::dropIfExists('subscriptions');
    }
}
