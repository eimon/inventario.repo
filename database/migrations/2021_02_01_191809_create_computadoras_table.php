<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion');
            $table->string('area');
            $table->string('mother');
            $table->string('cpu');
            $table->string('ram');
            $table->string('vga');
            $table->string('hdd');
            $table->string('ssd');
            $table->string('monitor');
            $table->string('propietario');
            $table->string('snGabinete');
            $table->string('snMonitor');
            $table->string('inventarioGabinete');
            $table->string('inventarioMonitor');
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
        Schema::dropIfExists('computadoras');
    }
}
