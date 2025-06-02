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
        Schema::create('user_references', function (Blueprint $table) {
            $table->id();
            $table->enum("status", ['active', 'non_active']);
            $table->unsignedBigInteger("reference_id");
            $table->foreignId("user_id");
            $table->string("reference_type");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_references');
    }
};
