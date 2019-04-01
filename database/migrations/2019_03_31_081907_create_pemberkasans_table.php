<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemberkasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemberkasans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('file');
            $table->text('keterangan')->nullable();
            $table->string('class');
            $table->string('matakuliah');
            $table->string('created_by');
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
        Schema::dropIfExists('pemberkasans');
    }
}
