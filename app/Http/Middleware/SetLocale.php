<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Получаем локаль из сессии или используем значение по умолчанию из config/app.php
        $locale = session('locale', config('app.locale'));

        // Устанавливаем локаль для текущего запроса
        App::setLocale($locale);

        // Продолжаем обработку запроса
        return $next($request);
    }
}
