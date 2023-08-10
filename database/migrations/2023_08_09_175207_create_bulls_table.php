<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBullsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('breed_id');
            $table->unsignedBigInteger('blood_rate_id');
            $table->string('bull_number')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('bull_name')->nullable()->collation('utf8mb4_unicode_ci');
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
        Schema::dropIfExists('bulls');
    }
}
