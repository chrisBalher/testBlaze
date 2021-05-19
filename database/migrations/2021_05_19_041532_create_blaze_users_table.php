<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlazeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaze_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string( column: 'firstname' );
            $table->string( column: 'lastname' );
            $table->string( column: 'email' );
            $table->string( column: 'phone' );
            $table->date( column: 'birthdate' );
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
        Schema::dropIfExists('blaze_users');
    }
}
