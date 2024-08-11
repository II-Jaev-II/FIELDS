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
        Schema::create('rcef_accreditations', function (Blueprint $table) {
            $table->id();
            $table->string('association');
            $table->string('province');
            $table->string('endorsementLetter');
            $table->string('farmerProfile');
            $table->string('letterOfIntent');
            $table->string('omnibusSwornCertificateNotary');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rcef_accreditations');
    }
};
