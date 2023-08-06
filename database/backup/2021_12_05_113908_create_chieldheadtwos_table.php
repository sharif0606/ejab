<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChieldheadtwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chieldheadtwos', function (Blueprint $table) {
            $table->id();
            $table->integer('chieldheadone_id');
            $table->string('head_name');
            $table->string('chieldtwo_code');
            $table->string('opening_balance')->nullable()->default(0);
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
        Schema::dropIfExists('chieldheadtwos');
    }
}
