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
        Schema::create('rsbsa_details', function (Blueprint $table) {
            $table->id();
            $table->string('rsbsaNo');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('extName');
            $table->string('sex');
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
        Schema::dropIfExists('rsbsa_details');
    }
};
