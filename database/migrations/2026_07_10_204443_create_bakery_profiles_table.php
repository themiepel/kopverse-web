<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bakery_profiles', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('bakery_name');

            $table->enum('role', [
                'bakery',
                'farmer'
            ]);

            $table->integer('level')->default(1);

            $table->integer('xp')->default(0);

            $table->integer('coin')->default(50);

            $table->integer('energy')->default(100);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bakery_profiles');
    }
};
