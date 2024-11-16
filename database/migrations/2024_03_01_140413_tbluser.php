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
        Schema::create('info_tbl', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('name'); // A string column
            $table->text('phone');
            $table->text('email'); // A text column (nullable)
            $table->timestamps(); // Created_at and updated_at timestamps
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_tbl');
    }
};
