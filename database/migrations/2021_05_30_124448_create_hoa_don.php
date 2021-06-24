<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngay_hoa_don');
            $table->integer('id_ma_kh');
            $table->foreign('id_ma_kh')
            ->references('id')->on('khach_hang')
            ->onDelete('cascade');
            $table->double('tong_tien');
            $table->double('dat_coc');
            $table->double('con_lai');
            $table->integer('tinh_trang');
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
        Schema::dropIfExists('hoa_don');
    }
}
