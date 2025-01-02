<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AddressController::class,"index"]);

