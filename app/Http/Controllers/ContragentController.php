<?php

namespace App\Http\Controllers;

use App\Models\Contragent;
use Illuminate\Http\Request;

class ContragentController extends Controller
{

    public function saveContragent(Request $request)
    {
        $contragent = new Contragent();
        $contragent->name = $request->input('name');
        $contragent->inn = $request->input('inn');
        $contragent->adress = $request->input('adress');
        $contragent->phone = $request->input('phone');
        $contragent->email = $request->input('email');
        $contragent->save();

        return redirect('/formContragent')->with('message', 'Запись произведена');
    }

    public function showData()
    {
        $dataContragent = Contragent::all();
        return view('forms.contragent', ['data' => $dataContragent]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('forms.contragent');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contragent $contragent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contragent $contragent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contragent $contragent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contragent $contragent)
    {
        //
    }
}
