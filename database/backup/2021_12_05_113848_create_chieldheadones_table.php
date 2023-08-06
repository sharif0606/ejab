<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChieldheadonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chieldheadones', function (Blueprint $table) {
            $table->id();
            $table->integer('subhead_id');
            $table->string('head_name');
            $table->string('chieldone_code');
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
        Schema::dropIfExists('chieldheadones');
    }
}
