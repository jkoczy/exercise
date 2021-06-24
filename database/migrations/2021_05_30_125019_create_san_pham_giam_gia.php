<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamGiamGia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham_giam_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ma_san_pham');
            $table->foreign('ma_san_pham')
            ->references('id')->on('san_pham')
            ->onDelete('cascade');
            $table->string('san_pham_di_cung');
            $table->double('giam_gia');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham_giam_gia');
    }
}
