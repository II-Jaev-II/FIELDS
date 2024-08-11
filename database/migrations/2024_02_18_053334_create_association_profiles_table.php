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
        Schema::create('association_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('association');
            $table->string('province');
            $table->string('municipality');
            $table->string('district');
            $table->string('barangay');
            $table->string('houseNumber')->nullable();
            $table->string('street')->nullable();
            $table->integer('zipCode');
            $table->string('office');
            $table->string('email');
            $table->string('registrationNumber');
            $table->string('cocNumber');
            $table->date('registrationDate');
            $table->date('expirationDate');
            $table->string('registrationCertificate');
            $table->string('goodStandingCertificate');
            $table->string('approvedByLaws');
            $table->string('latestAuditedFinancialStatement');
            $table->integer('userId');
            $table->string('cocStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('association_profile');
    }
};
