<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Demo Routes
Route::prefix('demo')->group(function () {
    Route::get('/bootstrap', [HomeController::class, 'bootstrap'])->name('demo.bootstrap');
    Route::get('/jquery', [HomeController::class, 'jquery'])->name('demo.jquery');
    Route::get('/vue', [HomeController::class, 'vue'])->name('demo.vue');
    Route::get('/charts', [HomeController::class, 'charts'])->name('demo.charts');
    Route::get('/calendar', [HomeController::class, 'calendar'])->name('demo.calendar');
    Route::get('/maps', [HomeController::class, 'maps'])->name('demo.maps');
    Route::get('/forms', [HomeController::class, 'forms'])->name('demo.forms');
    Route::get('/tables', [HomeController::class, 'tables'])->name('demo.tables');
});

// API Routes for AJAX demos
Route::prefix('api')->group(function () {
    Route::get('/chart-data', function () {
        return response()->json([
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            'data' => [12, 19, 3, 5, 2, 3]
        ]);
    })->name('api.chart-data');
    
    Route::get('/table-data', function () {
        return response()->json([
            'data' => [
                ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'status' => 'Active'],
                ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'status' => 'Inactive'],
                ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com', 'status' => 'Active'],
            ]
        ]);
    })->name('api.table-data');
});
