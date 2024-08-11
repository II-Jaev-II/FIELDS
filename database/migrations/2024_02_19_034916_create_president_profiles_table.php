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
        Schema::create('president_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('suffix')->nullable();
            $table->string('province');
            $table->string('municipality');
            $table->string('district');
            $table->string('barangay');
            $table->string('houseNumber')->nullable();
            $table->string('street')->nullable();
            $table->integer('zipCode');
            $table->string('position');
            $table->string('presidentId');
            $table->string('contactNumber');
            $table->date('birthDate');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('president_profiles');
    }
};
