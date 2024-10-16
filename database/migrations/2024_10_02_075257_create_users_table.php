<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('user', function (Blueprint $table) {
        $table->id('id_user');
        $table->string('username');
        $table->string('email')->unique();
        $table->string('password');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('user');
}

};
