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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('laundry_sepatu_id');
            $table->timestamps();
            $table->integer('status')->default('1');
            //1 = waiting, 2 = acc, 3 = proses, 4 = done, 5 = ditolak, -1 = nunggu payment, -99 = cancel
            $table->string('phoneNumber');
            $table->string('address');
            $table->string('jenisSepatu');
            $table->string('merkSepatu');
            $table->integer('harga')->nullable();
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
