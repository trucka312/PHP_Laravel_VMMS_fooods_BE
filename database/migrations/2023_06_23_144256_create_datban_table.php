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
        Schema::create('datban', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->unsigned();
            $table->string('email');
            $table->string('sdt');
            $table->integer('songuoi');
            $table->time('thoigian');
            $table->string('coso');
            $table->text('ghichu')->nullable();
            $table->tinyInteger('trangthai');
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
        Schema::dropIfExists('datban');
    }
};
