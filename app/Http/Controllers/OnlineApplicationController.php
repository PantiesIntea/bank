<?php

// app/Http/Controllers/OnlineApplicationController.php

namespace App\Http\Controllers;

use App\Models\OnlineApplication;
use Illuminate\Http\Request;

class OnlineApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'patronymic' => 'nullable|string|max:255',
            'territory' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'sex' => 'required|string|max:20',
            'inn' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'job_place' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'passport_series' => 'required|string|max:4',
            'passport_number' => 'required|string|max:10',
            'passport_issued_by' => 'required|string|max:255',
            'work_experience' => 'required|string|max:50',
            'credit_amount' => 'required|integer',
            'credit_term' => 'required|integer',
            'credit_name' => 'required|string|max:255',
            'bank_branch' => 'required|string|max:255',
            'has_credit' => 'nullable|boolean',
            'document_passport_photo' => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
            'document_registration_photo' => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
            'document_income_certificate' => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
            'phone' => 'required|string|max:20',
        ]);

        // Обработка загрузки файлов
        if ($request->hasFile('document_passport_photo')) {
            $validatedData['document_passport_photo'] = $request->file('document_passport_photo')->store('documents');
        }
        if ($request->hasFile('document_registration_photo')) {
            $validatedData['document_registration_photo'] = $request->file('document_registration_photo')->store('documents');
        }
        if ($request->hasFile('document_income_certificate')) {
            $validatedData['document_income_certificate'] = $request->file('document_income_certificate')->store('documents');
        }

        OnlineApplication::create($validatedData);

        return redirect()->back()->with('success', 'Ваша заявка успешно отправлена.');
    }
}

