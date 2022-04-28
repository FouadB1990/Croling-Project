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
            $table->string('name');
            $table->string('name_ar')->nullable();
            $table->string('nationality')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('passport_number')->nullable();
            $table->date('date_of_passpot_end')->nullable();
            $table->string('naval_passport_number')->nullable();
            $table->date('date_of_passport_naval_end')->nullable();
            $table->string('nearest_airport')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->text('bank_address')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->string('ibn_number')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('phone')->nullable();
            $table->binary('matres_lan_certificate')->nullable() ; // for blob
            $table->binary('image')->nullable() ; // for blob
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->string('password');
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
