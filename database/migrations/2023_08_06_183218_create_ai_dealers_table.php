<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_dealers', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id')->nullable();
            $table->integer('zone_id')->nullable();
            $table->integer('division_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('upazilla')->nullable();
            $table->integer('union')->nullable();
            $table->string('name')->collation('utf8mb4_unicode_ci');
            $table->text('address')->collation('utf8mb4_unicode_ci');
            $table->string('contact_number')->collation('utf8mb4_unicode_ci');
            $table->string('ai_technician_name')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('ai_technician_id')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('ai_technician_contact')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('training_institute')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('ejab_batch_no')->nullable()->collation('utf8mb4_unicode_ci');
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
        Schema::dropIfExists('ai_dealers');
    }
}
