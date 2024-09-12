<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('online_applications', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic')->nullable();
            $table->string('territory');
            $table->date('birth_date');
            $table->string('sex');
            $table->string('inn');
            $table->string('email');
            $table->string('address');
            $table->string('job_type');
            $table->string('job_place');
            $table->decimal('salary', 10, 2);
            $table->string('passport_series');
            $table->string('passport_number');
            $table->string('passport_issued_by');
            $table->string('work_experience');
            $table->integer('credit_amount');
            $table->integer('credit_term');
            $table->string('credit_name');
            $table->string('bank_branch');
            $table->boolean('has_credit')->default(false);
            $table->string('document_passport_photo')->nullable();
            $table->string('document_registration_photo')->nullable();
            $table->string('document_income_certificate')->nullable();
            $table->string('phone');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('online_applications');
    }
};

