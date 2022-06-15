<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_networks', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('company', 200);
            $table->string('industry', 100)->nullable();
            $table->string('email', 100);
            $table->string('phone', 50)->nullable();
            $table->string('city', 100)->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('state')->nullable();
            $table->longText('coverage_area')->nullable();
            $table->longText('message');
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
        Schema::dropIfExists('service_networks');
    }
};
