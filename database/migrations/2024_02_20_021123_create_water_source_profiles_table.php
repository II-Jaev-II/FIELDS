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
        Schema::create('water_source_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('SWIPHectares')->nullable();
            $table->string('SFRHectares')->nullable();
            $table->string('CISTERNHectares')->nullable();
            $table->string('STWHectares')->nullable();
            $table->string('PISOSHectares')->nullable();
            $table->string('PIPHectares')->nullable();
            $table->string('RPISHectares')->nullable();
            $table->string('SPISHectares')->nullable();
            $table->string('WPISHectares')->nullable();
            $table->string('DDHectares')->nullable();
            $table->string('CDHectares')->nullable();
            $table->string('SDHectares')->nullable();
            $table->string('rainfallHectares')->nullable();
            $table->string('grandHectares')->nullable();
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_source_profiles');
    }
};
