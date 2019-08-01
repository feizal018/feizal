<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetkomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setkoms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('SK_kode');
            $table->unsignedBigInteger('kom_kode');
            $table->string('SK_nama');
            $table->text('SK_kelas');
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
        Schema::dropIfExists('setkoms');
    }
}
