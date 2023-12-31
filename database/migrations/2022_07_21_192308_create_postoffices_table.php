<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostofficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postoffices', function (Blueprint $table) {
            $table->id();
            $table->integer('upazilla_id');
            $table->string('postoffice')->collation('utf8mb4_unicode_ci');
            $table->string('postoffice_en');
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
        Schema::dropIfExists('postoffices');
    }
}
