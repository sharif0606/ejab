<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCattleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cattle', function (Blueprint $table) {
            $table->id();
            $table->string('serial_no')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('beneficiary_name')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('f_or_h_name')->nullable()->collation('utf8mb4_unicode_ci');
            $table->integer('country_id')->nullable();
            $table->integer('zone_id')->nullable();
            $table->integer('division_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('upazilla_id')->nullable();
            $table->integer('union_id')->nullable();
            $table->string('postoffice')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('village')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('beneficiary_contact')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('cow_age')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('cow_breed')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('cow_blood_qty')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('cow_color')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('cow_weight')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('cow_number_of_baby')->nullable()->collation('utf8mb4_unicode_ci');
            $table->date('cow_last_delivery')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('cow_milking_qty')->nullable()->collation('utf8mb4_unicode_ci');
            $table->date('cow_pregnant_date')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('bull_name')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('bull_number')->nullable()->collation('utf8mb4_unicode_ci');
            $table->integer('bull_breed')->nullable()->collation('utf8mb4_unicode_ci');
            $table->integer('blood_qty')->nullable()->collation('utf8mb4_unicode_ci');
            $table->date('delivery_date_aprox')->nullable()->collation('utf8mb4_unicode_ci');
            $table->integer('pregnancy_exam_result')->nullable()->collation('utf8mb4_unicode_ci');
            $table->date('delivery_date')->nullable()->collation('utf8mb4_unicode_ci');
            $table->integer('calf_gender')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('calf_weight')->nullable()->collation('utf8mb4_unicode_ci');
            $table->integer('calf_color')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('ai_technician_name')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('ai_technician_id')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('ai_technician_contact')->nullable()->collation('utf8mb4_unicode_ci');
            $table->text('remarks')->nullable()->collation('utf8mb4_unicode_ci');
            $table->text('remarks_final')->nullable()->collation('utf8mb4_unicode_ci');
            $table->date('notification_date')->nullable()->comment('9 month 20days after pregnant');
            $table->integer('notification_status')->default(0)->comment('0 unread 1 read');
            $table->integer('status')->default(1)->comment('0 inactive 1 active');
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
        Schema::dropIfExists('cattle');
    }
}
