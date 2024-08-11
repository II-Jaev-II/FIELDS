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
        Schema::create('buyer_e_linkages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('commodity');
            $table->string('subCommodity');
            $table->string('variety');
            $table->string('frequency');
            $table->string('volume');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer_e_linkages');
    }
};
