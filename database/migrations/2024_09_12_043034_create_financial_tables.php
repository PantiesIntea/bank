<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('amount');
            $table->integer('term');
            $table->decimal('down_payment_percent', 5, 2);
            $table->decimal('interest_rate', 5, 2);
            $table->decimal('monthly_payment', 10, 2);
            $table->timestamps();
        });

        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('amount');
            $table->integer('term');
            $table->decimal('interest_rate', 5, 2);
            $table->decimal('monthly_income', 10, 2);
            $table->timestamps();
        });

        Schema::create('bonds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('amount');
            $table->integer('term');
            $table->decimal('interest_rate', 5, 2);
            $table->decimal('monthly_income', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('credits');
        Schema::dropIfExists('deposits');
        Schema::dropIfExists('bonds');
    }
};

