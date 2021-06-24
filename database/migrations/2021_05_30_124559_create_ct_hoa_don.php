<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_hoa_don', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sohd');
            $table->foreign('id_sohd')
            ->references('id')->on('hoa_don')
            ->onDelete('cascade');
            $table->integer('ma_san_pham');
            $table->foreign('ma_san_pham')
            ->references('id')->on('san_pham')
            ->onDelete('cascade');
            $table->integer('so_luong');
            $table->double('don_gia');
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
        Schema::dropIfExists('ct_hoa_don');
    }
}
