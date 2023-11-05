<?php

namespace App\Http\Controllers;

use App\Http\Requests\Expenses\StoreRequest;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('forms.expenses');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $storeRequest)
    {
        try {
            $expense = Expenses::create($storeRequest->all());
    
            if ($expense) {
                return redirect('/')->with('success', 'Запись успешно добавлена.');
            } else {
                return redirect('/')->with('error', 'Запись не добавлена.');
            }
        } catch (\Exception $e) {
            // В случае возникновения исключения, например, ошибки валидации, можно также выдать сообщение об ошибке.
            return redirect('/')->with('error', 'Запись не добавлена: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expenses $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
