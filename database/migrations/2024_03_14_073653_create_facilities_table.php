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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('association');
            $table->string('intervention');
            $table->string('specification');
            $table->string('amount');
            $table->string('status');
            $table->string('fundingAgency');
            $table->string('fundSource');
            $table->string('moa');
            $table->string('certificateOfAcceptance');
            $table->string('geoTaggedPicture');
            $table->string('cms');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
