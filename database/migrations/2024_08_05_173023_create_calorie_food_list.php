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
        Schema::create('calorie_food_list', function (Blueprint $table) {
            $table->id();
            $table->string('food_name');
            $table->float('calories');
            $table->float('carbs');
            $table->float('proteins');
            $table->float('fats');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calorie_food_list');
    }
};
