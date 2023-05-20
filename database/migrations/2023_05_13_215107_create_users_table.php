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
            $table->text('full_name');
            $table->text('user_name');
            $table->text('email');
            $table->text('email_verify');
            $table->text('email_otp');
            $table->text('phone');
            $table->text('phone_verify');
            $table->text('phone_otp');
            $table->text('password');
            $table->text('address');
            $table->text('dmt_plan');
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
