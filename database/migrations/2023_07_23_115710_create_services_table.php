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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laundry_sepatu_id');
            $table->string('serviceName');
            $table->string('serviceSlug')->unique();
            $table->boolean('status')->default(true);
            //false = tidak aktif, true = aktif
            $table->integer('servicePrice');
            $table->text('serviceDescription');
            $table->string('servicePicture')->nullable();
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
        Schema::dropIfExists('services');
    }
};
