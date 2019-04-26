<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('errlists', function (Blueprint $table) {
        //     $table->increments('id');
            
        //     $table->string('content_req');
        //     //noi dung: content danh sach yeu cau
        //     $table->string('image_req');
        //     //hinh anh: image
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('errlists');
    }
}
