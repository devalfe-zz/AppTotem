<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMovilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_default')->create('users_movil', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->string('Phone', 20)->primary();
            $table->string('Name');
            $table->date('Birthdate');           
            $table->string('Address');
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
        Schema::connection('mysql_default')->dropIfExists('users_movil');
    }
}
