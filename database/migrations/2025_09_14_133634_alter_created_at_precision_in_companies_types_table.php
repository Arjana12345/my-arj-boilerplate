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
        Schema::table('companies_types', function (Blueprint $table) {
                 
            // Change the precision of the created_at column to 3 (milliseconds)
            $table->timestamp('created_at', 3)->change();
            // You might also want to do the same for 'updated_at'
            $table->timestamp('updated_at', 3)->change();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('companies_types', function (Blueprint $table) {
              // Revert the precision back to the default (0) if needed
                $table->timestamp('created_at', 0)->change();
                $table->timestamp('updated_at', 0)->change();
        });
    }
};
