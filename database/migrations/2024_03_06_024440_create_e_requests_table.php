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
        Schema::create('e_requests', function (Blueprint $table) {
            $table->id();
            $table->string('referenceNumber');
            $table->string('province');
            $table->string('natureOfRequest');
            $table->string('requestType');
            $table->string('letterOfIntent');
            $table->string('boardResolution');
            $table->string('endorsementLetter1');
            $table->string('endorsementLetter2');
            $table->string('certificateOfAvailability');
            $table->string('machineriesProposal');
            $table->string('geoTaggedPhotos');
            $table->string('geoTaggedLocation');
            $table->string('businessPlan');
            $table->string('usufruct');
            $table->string('productionManagementPlan');
            $table->string('requestStatus');
            $table->string('updatedRequestDate');
            $table->string('validationForm');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_requests');
    }
};
