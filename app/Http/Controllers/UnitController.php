<?php

namespace App\Http\Controllers;

use App\Http\Resources\Unit\UnitResource;
use App\Models\Unit;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     title = "My Doc API",
 *     version = "1.0.0",
 *     description = "Описание API"
 * ),
 * 
 * @OA\PathItem(
 *     path="/api/"
 * ),
 */
class UnitController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/units",
     *     summary="GET units",
     *     tags={"Unit"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="array", @OA\Items(
     *               @OA\Property(property="id", type="integer", example=1),
     *               @OA\Property(property="title", type="string", example="Some name"),
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
    public function formUnit()
    {
        return view('forms.unit');
    }
    public function index()
    {
        $units = Unit::all();
        return UnitResource::collection($units);
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
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
