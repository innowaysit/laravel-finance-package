<?php

use Innowaysit\Finance\Controllers\Finance\CategoryController;
use Innowaysit\Finance\Controllers\Finance\WelcomeController;

Route::get('/finance', [WelcomeController::class, 'welcome']);
Route::group([
    'middleware' => ['web']
], function () {
    Route::resource('categories', CategoryController::class);
});

Route::resource('income', IncomeController::class);
