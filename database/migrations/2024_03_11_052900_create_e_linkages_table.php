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
        Schema::create('e_linkages', function (Blueprint $table) {
            $table->id();
            $table->string('association');
            $table->string('commodity');
            $table->string('variety');
            $table->string('volume');
            $table->date('startDate');
            $table->date('endDate');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_linkages');
    }
};
