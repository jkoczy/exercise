<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_san_pham',100);
            $table->string('hinh_san_pham',100);
            $table->double('gia_size_s');
            $table->double('gia_size_m');
            $table->double('giam_gia');
            $table->string('mo_ta_tom_tat',500);
            $table->string('chi_tiet');
            $table->tinyInteger('trang_thai');
            $table->integer('ma_loai');
            $table->foreign('ma_loai')
            ->references('id')->on('loai_san_pham')
            ->onDelete('cascade');
            $table->string('san_pham_an_cung',100);
            $table->tinyInteger('hot');
            $table->integer('like');
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
        Schema::dropIfExists('san_pham');
    }
}
