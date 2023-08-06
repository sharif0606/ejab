<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
			$table->string('type',20)->unique();
			$table->string('identity',30)->unique();
            $table->timestamps();
        });
		
		DB::table('roles')->insert([
			[
				'type'=>'Superadmin',
				'identity'=>'superadmin',
				'created_at'=>Carbon::now()
			],
			[
				'type'=>'Admin',
				'identity'=>'admin',
				'created_at'=>Carbon::now()
			],
			[
				'type'=>'User',
				'identity'=>'user',
				'created_at'=>Carbon::now()
			]
		]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
