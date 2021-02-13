<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
			$table->string('last_name')->nullable();
			$table->string('username')->unique();
			$table->string('phone_no')->unique();
            $table->string('email')->unique();
			$table->string('street_address');
            $table->string('password');
			$table->string('ip_address')->nullable();
			$table->string('avater')->nullable();
			$table->string('status')->default(0);
			$table->string('divison_id')->nullable();
			$table->string('district_id')->nullable();
			$table->string('shipping_address')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
