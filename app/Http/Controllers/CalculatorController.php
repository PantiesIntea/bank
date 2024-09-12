<?php

// app/Http/Controllers/CalculatorController.php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\Deposit;
use App\Models\Bond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalculatorController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $type = $request->input('type');

        $data = $request->validate([
            'amount' => 'required|integer',
            'term' => 'required|integer',
            'down_payment_percent' => 'nullable|numeric',
            'interest_rate' => 'required|numeric',
            'monthly_payment' => 'required|numeric',
        ]);

        switch ($type) {
            case 'credit':
                Credit::create([
                    'user_id' => $user->id,
                    'amount' => $data['amount'],
                    'term' => $data['term'],
                    'down_payment_percent' => $data['down_payment_percent'],
                    'interest_rate' => $data['interest_rate'],
                    'monthly_payment' => $data['monthly_payment'],
                ]);
                break;

            case 'deposit':
                Deposit::create([
                    'user_id' => $user->id,
                    'amount' => $data['amount'],
                    'term' => $data['term'],
                    'interest_rate' => $data['interest_rate'],
                    'monthly_income' => $data['monthly_payment'], // Назовем поле monthly_payment, т.к. для вкладов это доход
                ]);
                break;

            case 'bond':
                Bond::create([
                    'user_id' => $user->id,
                    'amount' => $data['amount'],
                    'term' => $data['term'],
                    'interest_rate' => $data['interest_rate'],
                    'monthly_income' => $data['monthly_payment'],
                ]);
                break;
        }

        return redirect()->back()->with('success', 'Данные успешно сохранены.');
    }
}
