<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\OnlineApplicationController;


// Группа маршрутов с Middleware SetLocale
Route::middleware(['web', SetLocale::class])->group(function () {

    // Главная страница
    Route::get('/', function () {
        return view('index');
    })->name('home');

    // Для бизнеса
    Route::get('/business', function () {
        return view('business');
    })->name('business');

    // Курсы валют
    Route::get('/rates', function () {
        return view('rates');
    })->name('rates');

    // Банкоматы
    Route::get('/maps', function () {
        return view('maps');
    })->name('maps');

    // Кредиты
    Route::get('/credit', function () {
        return view('credit');
    })->name('credit');

    // Кредиты 2
    Route::get('/credit2', function () {
        return view('credit2');
    })->name('credit2');

    // Карты
    Route::get('/cards', function () {
        return view('cards');
    })->name('cards');

    // Карты (одна)
    Route::get('/cards-single', function () {
        return view('cards-single');
    })->name('cards-single');

    // Продукт
    Route::get('/product', function () {
        return view('product');
    })->name('product');

    // Партнеры
    Route::get('/partners', function () {
        return view('partners');
    })->name('partners');

    // Приемная
    Route::get('/reception', function () {
        return view('reception');
    })->name('reception');

    // Услуги
    Route::get('/services', function () {
        return view('services');
    })->name('services');

    // FAQ
    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    // О нас
    Route::get('/about', function () {
        return view('about');
    })->name('about');

    // Страница 404 (не забывайте, что это исключительная страница)
    Route::fallback(function () {
        return view('404');
    })->name('404');

    // Установка языка
    Route::post('/set-language', function (Request $request) {
        $language = $request->input('lang');

        if (in_array($language, ['en', 'ru', 'uzb'])) {
            // Сохраняем выбранный язык в сессии
            session(['locale' => $language]);
        }

        return redirect()->back();  // Перенаправляем обратно на ту же страницу
    })->name('set-language');

    // Проверка текущей локали
    Route::get('/check-locale', function () {
        return 'Текущая локаль: ' . session('locale', 'не установлена');
    });

    Route::middleware(['web', SetLocale::class])->group(function () {

        Route::get('/index', function () {
            return view('index');
        })->name('home');
    
        // Другие ваши маршруты...
    
        Route::middleware('guest')->group(function () {
            Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
            Route::post('login', [AuthController::class, 'login']);
            Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
            Route::post('register', [AuthController::class, 'register']);
        });
    
        Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

        Route::post('/calculate', [CalculatorController::class, 'store'])->name('calculate')->middleware('auth');
    
        Route::post('/online-application', [OnlineApplicationController::class, 'store'])->name('online-application');
    });
});
