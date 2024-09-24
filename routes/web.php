<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('index');
});

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employee/edit', [EmployeeController::class, 'edit'])->name('employee.edit')->middleware('auth');

// Route to handle the update profile request
Route::put('/employee/update', [EmployeeController::class, 'update'])->name('employee.update')->middleware('auth');

Route::get('/test-database', function () {
    try {
        // Test database connection
        \DB::connection()->getPdo();
        return 'Database connection is successful!';
    } catch (\Exception $e) {
        return 'Could not connect to the database. Please check your configuration. Error: ' . $e->getMessage();
    }
});