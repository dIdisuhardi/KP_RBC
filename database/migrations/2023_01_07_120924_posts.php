<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('postingan', function (Blueprint $table) {
            $table->bigIncrements('id_posting');
            $table->string('judul');
            $table->longText('deskripsi');
            $table->foreignId('category_id')->references('id')->on('category')->onDelete('cascade')->onUpdate('cascade');
            $table->string('cover_gambar');
            $table->timestamp('waktu_posting')->useCurrent();
            $table->tinyInteger('deleted_at')->default('0');
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
        Schema::dropIfExists('postingan');
    }
};
