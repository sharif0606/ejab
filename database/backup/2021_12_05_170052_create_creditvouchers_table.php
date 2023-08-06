<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditvouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditvouchers', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_no');
            $table->date('v_date');
            $table->string('particular')->nullable();
            $table->double('debit_sum',14,2);
            $table->string('credit_sum',14,2);
            $table->string('cheque_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('cheque_date')->nullable();
            $table->integer('created_by');
            $table->integer('company_id')->default(1);
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
        Schema::dropIfExists('creditvouchers');
    }
}
