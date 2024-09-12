<?php

// app/Models/OnlineApplication.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname', 'name', 'patronymic', 'territory', 'birth_date', 'sex', 'inn', 'email',
        'address', 'job_type', 'job_place', 'salary', 'passport_series', 'passport_number',
        'passport_issued_by', 'work_experience', 'credit_amount', 'credit_term', 'credit_name',
        'bank_branch', 'has_credit', 'document_passport_photo', 'document_registration_photo',
        'document_income_certificate', 'phone',
    ];
}
