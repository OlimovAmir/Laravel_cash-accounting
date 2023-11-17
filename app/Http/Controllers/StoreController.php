<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store\StoreRequest;
use App\Http\Resources\Store\StoreResource;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function formStore()
    {
        return view('forms.store');
    }

    public function saveStore(StoreRequest $storeRequest)
    {
        $store = new Store();
        $store->number = $storeRequest->input('number');
        $store->name = $storeRequest->input('name');
        $store->save();
        return redirect('/formStore')->with('message', 'Запись произведена');
    }
    public function showData()
    {
        $dataStore = Store::all();
        return view('forms.store', ['dataStore' => $dataStore]);
    }
    /**
     * @OA\Get(
     *     path="/api/stores",
     *     summary="GET stores",
     *     tags={"Store"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="array", @OA\Items(
     *               @OA\Property(property="id", type="integer", example=1),
     *               @OA\Property(property="number", type="integer", example=1),
     *               @OA\Property(property="name", type="string", example="Some name"),
     *               
     *             )),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ресурс не найден"
     *     )
     * )
     */
    public function index()
    {
        $stores = Store::all();
        return StoreResource::collection($stores);
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
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
