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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('work_arrangement');
            $table->longText('description');
            $table->string('salary');
            $table->string('languages');
            $table->string('category_id')->foreign('category_id')->references('id')->on('categories');
            $table->string('company_id')->foreign('company_id')->references('id')->on('companies');
            $table->string('user_id')->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
