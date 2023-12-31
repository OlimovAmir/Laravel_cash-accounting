<?php

use App\Http\Controllers\CashController;
use App\Http\Controllers\ContragentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UnitController;
use App\Models\Store;
use App\Models\Unit;
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
    Route::get('/formUnit', function () {
        $data = Unit::all();
        return view('forms.unit', ['data' => $data]);
    });
    Route::post('/save-unit', [UnitController::class,'saveUnit']);

    Route::post('/save-contragent', [ContragentController::class,'saveContragent']);

    Route::get('/formStore', [StoreController::class,'formStore']);
    Route::post('/save-store', [StoreController::class,'saveStore']);
    Route::get('/formStore', function () {
        $dataStore = Store::all();
        return view('forms.store', ['dataStore' => $dataStore]);
    });
    
});

require __DIR__.'/auth.php';
