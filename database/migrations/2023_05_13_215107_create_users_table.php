<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->text('full_name')->nullable();
            $table->text('user_name')->unique();
            $table->text('email')->unique();
            $table->text('email_verify');
            $table->text('email_otp')->nullable();
            $table->text('phone');
            $table->text('phone_verify');
            $table->text('phone_otp')->nullable();
            $table->text('password');
            $table->text('access_token')->nullable();
            $table->text('address')->nullable();
            $table->text('dmt_plan')->nullable();
            $table->text('account_status');
            $table->text('account_type');
            $table->text('managed_by');
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
