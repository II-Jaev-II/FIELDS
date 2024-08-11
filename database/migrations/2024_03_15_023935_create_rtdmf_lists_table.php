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
        Schema::create('rtdmf_lists', function (Blueprint $table) {
            $table->id();
            $table->string('commodity');
            $table->string('province');
            $table->string('municipality');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('title');
            $table->string('attachedResult');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rtdmf_lists');
    }
};