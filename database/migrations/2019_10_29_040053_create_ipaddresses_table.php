<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IPaddresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('deviceID');
            $table->integer('physicalPortNum');
            $table->ipaddress('ipaddress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipaddresses');
    }
}
