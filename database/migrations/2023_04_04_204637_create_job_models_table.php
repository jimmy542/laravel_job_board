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
        Schema::create('job_models', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->longText('company');
            $table->longText('area')->nullable();
            $table->string('post_code')->nullable();
            $table->string('city')->nullable();
            $table->longText('detail');
            $table->integer('salary');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('job_models');
        
    }
};
