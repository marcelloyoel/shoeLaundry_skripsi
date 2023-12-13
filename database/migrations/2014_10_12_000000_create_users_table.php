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
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('displayName');
            $table->string('address')->nullable();
            $table->integer('status')->default('1');
            // 1 = aktif, 2 = ga aktif
            $table->boolean('isLogin')->default('1');
            //1 = login, 0 = ga lagi login
            $table->string('phoneNumber');
            $table->foreignId('group_id')->default('1');
            $table->string('picture')->nullable();
            // $table->float('latitude')->nullable();
            // $table->float('longitude')->nullable();
            // 1 = buyer, 2 = laundry, 3 = admin, 4 = superadmin
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
};
