<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key 'id' **Laravel กำหนดให้ Primary Key ชื่อ id เสมอ**
            $table->string('name'); // varchar(255) defaults
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // timestamp/DATETIME
            $table->string('password'); // varchar(60) 'password' **Laravel กำหนดให้มี 60**
            $table->rememberToken();
            $table->timestamps(); // timestamps-ข้อสังเกตุมีการเติม s- create --> DATETIME 'created_at', 'updated_at'
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
};
