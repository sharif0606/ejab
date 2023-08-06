<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('contact');
            $table->string('email')->nullable();
            $table->string('address')->collation('utf8mb4_unicode_ci');
            $table->boolean('status');
            $table->string('category');
            $table->string('reference')->nullable();
            $table->text('note')->collation('utf8mb4_unicode_ci')->nullable();
            $table->boolean('group_company_id');
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
        Schema::dropIfExists('suppliers');
    }
}
