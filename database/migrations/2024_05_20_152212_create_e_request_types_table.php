<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('e_request_types', function (Blueprint $table) {
            $table->id();
            $table->string('association');
            $table->string('referenceNumber');
            $table->string('requestType');
            $table->string('name');
            $table->string('address');
            $table->string('houseNumber');
            $table->string('street');
            $table->string('office');
            $table->string('contactNumber');
            $table->string('emailAddress');
            $table->date('birthDate');
            $table->integer('maleCount');
            $table->integer('femaleCount');
            $table->integer('serviceArea');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_request_types');
    }
};
