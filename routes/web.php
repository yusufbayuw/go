<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoController;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::away('https://tbu.ac.id');
});
Route::get('/{urlx}', [GoController::class, 'gotolink']);
