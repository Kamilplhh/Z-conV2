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
        Schema::create('specs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('label_1');
            $table->string('label_2');
            $table->string('label_3');
            $table->string('label_4');
            $table->string('label_5');
            $table->string('label_6');
            $table->string('label_7');
            $table->string('label_8');
            $table->string('label_9');
            $table->string('label_10');
            $table->string('label_11');
            $table->string('label_12');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specs');
    }
};
