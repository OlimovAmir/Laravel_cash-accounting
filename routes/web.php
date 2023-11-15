<?php

use App\Http\Controllers\CashController;
use App\Http\Controllers\ContragentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/formExpenses', [ExpensesController::class,'index']);
    Route::post('/create', [ExpensesController::class,'store'])->name('');
    
    Route::get('/formCash', [CashController::class,'index']);
    Route::get('/formEmployee', [EmployeeController::class,'index']);
    Route::get('/formContragent', [ContragentController::class,'index']);

    Route::get('/formUnit', [UnitController::class,'formUnit']);
    Route::post('/save-unit', [UnitController::class,'saveUnit']);
});

require __DIR__.'/auth.php';
