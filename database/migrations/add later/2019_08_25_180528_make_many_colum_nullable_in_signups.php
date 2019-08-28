<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeManyColumNullableInSignups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signups', function (Blueprint $table) {
            //
            $table->string('role')->nullable()->change();
            $table->string('updated_at')->nullable()->change();
            // $table->string('created_at')->nullable()->change();
            // $table->string('updated_at')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('uid')->nullable()->change();
            $table->string('password')->nullable()->change();           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('signups', function (Blueprint $table) {
            //
        });
    }
}
