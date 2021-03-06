<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuongsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('luong', function (Blueprint $table) {
      $table->id();
      $table->dateTime('thang');
      $table->bigInteger('luonggoc')->unsigned();
      $table->bigInteger('phat')->unsigned();
      $table->bigInteger('thuong')->unsigned();
      $table->bigInteger('thuclinh');
      $table->string('trangthai');
      $table->string('ghichu');
      $table->unsignedBigInteger('nhan_vien_id');
      $table
        ->foreign('nhan_vien_id')
        ->references('id')
        ->on('nhan_vien');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('luong');
  }
}
