<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiDealerMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_dealer_messages', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('ai_dealer_id');
			$table->foreign('ai_dealer_id')->references('id')->on('ai_dealers')->onDelete('cascade');
            $table->text('message')->collation('utf8mb4_unicode_ci');
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
        Schema::dropIfExists('ai_dealer_messages');
    }
}
