<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('networks', function (Blueprint $table) {
            $table->Integer('userid');
        });
        Schema::table('addresses', function (Blueprint $table) {
            $table->Integer('userid');
        });
        Schema::table('devices', function (Blueprint $table) {
            $table->Integer('userid');
        });
        Schema::table('device_metas', function (Blueprint $table) {
            $table->Integer('userid');
        });
        Schema::table('IPaddresses', function (Blueprint $table) {
            $table->Integer('userid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('networks', function (Blueprint $table) {
            $table->DropColumn('userid');
        });
        Schema::table('addresses', function (Blueprint $table) {
            $table->DropColumn('userid');
        });
        Schema::table('devices', function (Blueprint $table) {
            $table->DropColumn('userid');
        });
        Schema::table('device_metas', function (Blueprint $table) {
            $table->DropColumn('userid');
        });
        Schema::table('IPaddresses', function (Blueprint $table) {
            $table->DropColumn('userid');
        });
    }
}
