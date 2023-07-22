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
        Schema::create('sampham', function (Blueprint $table) {
            $table->id();
            $table->integer('danhmucmon_id')->unsigned();

            $table->string('tensp');
            $table->double('gia');
            $table->text('mieuta');
            $table->string('anh');
            $table->string('tag');
            $table->boolean('featured');
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
        Schema::dropIfExists('sanpham');
    }
};
