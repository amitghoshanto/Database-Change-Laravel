<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationUpdateController;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(LocationUpdateController::class)->prefix('update')->group(function () {
    Route::get('division', 'division')->name('location.division.update');
    Route::get('district', 'district')->name('location.district.update');
    Route::get('area', 'area')->name('location.area.update');
});
