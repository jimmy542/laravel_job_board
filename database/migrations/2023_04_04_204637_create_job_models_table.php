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
            $table->string('company');
            $table->string('area');
            $table->string('post_code');
            $table->string('city');
            $table->string('detail');
            $table->string('skills');
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
        // Schema::dropIfExists('job_models');
        Schema::dropColumns('job_models',['job_name','company','area',
        'post_code','city','detail','skills','salary','user_id']);
    }
};
