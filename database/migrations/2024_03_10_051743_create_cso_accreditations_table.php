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
        Schema::create('cso_accreditations', function (Blueprint $table) {
            $table->id();
            $table->string('association');
            $table->string('province');
            $table->string('amendedOmnibusSwornStatement');
            $table->string('checklistCsoRequirement');
            $table->string('csoApplicationForm');
            $table->string('secretaryCertificate');
            $table->string('swornAffidavit');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cso_accreditations');
    }
};
