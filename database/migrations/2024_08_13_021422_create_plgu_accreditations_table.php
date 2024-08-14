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
        Schema::create('plgu_accreditations', function (Blueprint $table) {
            $table->id();
            $table->string('letterOfApplication');
            $table->string('dulyAccomplishedForm');
            $table->string('dulyApprovedBoard');
            $table->string('certificateOfRegistration');
            $table->string('currentList');
            $table->string('annualMeetings');
            $table->string('annualAccomplishment');
            $table->string('financialStatement');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plgu_accreditations');
    }
};
