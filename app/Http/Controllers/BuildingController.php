<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Http\Requests\UpdateBuildingRequest;
use App\Models\Building;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings = Building::all();

        return response()->json([
            'success'   => true,
            'message'   => 'Buildings listed successfully',
            'data'      => $buildings,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuildingRequest $request)
    {
        $building = Building::create($request->validated());

        return response()->json([
            'success'    => true,
            'message'   => 'Building created successfully',
            'data'      => $building,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Building $building)
    {
        return response()->json([
            'success'    => true,
            'message'   => 'Building fetched successfully',
            'data'      => $building,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuildingRequest $request, Building $building)
    {
        $result = $building->update($request->validated());

        return response()->json([
            'success' => $result,
            'message' => 'Building updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Building $building)
    {
        $result = $building->delete();

        return response()->json([
            'success' => $result,
            'message' => 'Building deleted successfully',
        ]);
    }
}
