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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->default('');
            $table->string('subject');
            $table->longtext('content');
            $table->tinyInteger('priorite');
            $table->tinyInteger('status');
            $table->timestamp('resolution_date');
            $table->tinyInteger('section')->default(0);
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('group_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('agent_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
