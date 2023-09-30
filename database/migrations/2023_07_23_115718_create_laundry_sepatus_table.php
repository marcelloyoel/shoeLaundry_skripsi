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
        Schema::create('laundry_sepatus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('laundrySepatuName');
            $table->string('laundrySepatuSlug')->unique();
            $table->text('bio');
            $table->string('picture')->nullable();
            $table->string('kontak');
            $table->string('alamat');
            $table->string('jarak');
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
        Schema::dropIfExists('laundry_sepatus');
    }
};
