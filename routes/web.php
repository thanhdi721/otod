<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', [HomeController::class, 'index'])->name('home');

// Car Detail Route
Route::get('/car-detail', function () {
    return view('car-detail');
})->name('car-detail');


// Payment Route
Route::get('/payment', function () {
    return view('payment');
})->name('payment');

// Search Route
Route::get('/search-detail', function () {
    return view('search');
})->name('search');

// Search Higher Route
Route::get('/search-higher', function () {
    return view('search-higher');
})->name('search-higher');

// Search Result Route
Route::get('/search-result', function () {
    return view('search-result');
})->name('search-result');

// Car Rental History Route
Route::get('/car-rental-history', function () {
    return view('car-rental-history');
})->name('car-rental-history');

// Car Prepare Route
Route::get('/car-prepare', function () {
    return view('car-prepare');
})->name('car-prepare');

// Car Exterior Photos Prepare
Route::get('/car-exterior-photos', function () {
    return view('car-exterior-photos');
})->name('car-exterior-photos');

// Car Confirm Prepare Route
Route::get('/car-confirm-prepare', function () {
    return view('car-confirm-prepare');
})->name('car-confirm-prepare');

// Car Return Route
Route::get('/car-return', function () {
    return view('car-return');
})->name('car-return');

// Car Exterior Photos Return Route
Route::get('/car-exterior-photos-return', function () {
    return view('car-exterior-photos-return');
})->name('car-exterior-photos-return');

// Car Confirm Prepare Route
Route::get('/car-confirm-return', function () {
    return view('car-confirm-return');
})->name('car-confirm-return');

// Car Detail Route == Pending Review
Route::get('/pending-review', function () {
    return view('pending-review');
})->name('pending-review');

// Car Detail Route == Rejected
Route::get('/rejected', function () {
    return view('rejected');
})->name('rejected');

// Car Detail Route == Completed
Route::get('/completed', function () {
    return view('completed');
})->name('completed');

// Car Detail Route == On the Way
Route::get('/on-the-way', function () {
    return view('on-the-way');
})->name('on-the-way');

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
