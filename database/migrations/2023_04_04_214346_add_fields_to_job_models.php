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
        Schema::table('job_models', function (Blueprint $table) {
            $table->longText('skills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('job_models', function (Blueprint $table) {
        
        // });

    Schema::dropColumns('job_models',['job_name','company','area',
        'post_code','city','detail','skills','salary','user_id']);
    }
};
