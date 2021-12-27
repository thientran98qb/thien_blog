<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number', 50);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nickname', 100)->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('ward')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->enum('gender', [0, 1, 2])->nullable();
            $table->string('address', 255)->nullable();
            $table->boolean('active')->default(0);
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone_number', 'first_name', 'last_name', 'nickname', 'country', 'city', 'district', 'ward', 'birthday', 'gender', 'active']);
        });
    }
}
