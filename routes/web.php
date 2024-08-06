<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('formulir', [FormController::class, 'show'])->name('form.show');

Route::get('formulir/{tab}', [FormController::class, 'show'])
    ->where('tab', 'hubungan|hmanajemen|administrasi|program')
    ->name('form.show.tab');


