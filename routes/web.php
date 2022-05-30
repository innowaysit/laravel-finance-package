<?php

use Innowaysit\Finance\Controllers\Finance\CategoryController;
use Innowaysit\Finance\Controllers\Finance\WelcomeController;

Route::get('/finance', [WelcomeController::class, 'welcome']);
Route::resource('categories', CategoryController::class);
