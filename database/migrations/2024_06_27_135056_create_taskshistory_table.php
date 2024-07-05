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
        Schema::create('taskshistory', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('modified_field');
            $table->string('description');
            $table->foreign('id')->references('id')->on('task');
            $table->char('state',length:1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taskshistory');
    }
};
