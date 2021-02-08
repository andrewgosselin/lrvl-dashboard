<?php


Route::middleware(['web'])->group(function () {
    Route::get('/apps/dashboard', function() {
        return view('dashboard::dashboard');
    })->name("apps.dashboard");
});