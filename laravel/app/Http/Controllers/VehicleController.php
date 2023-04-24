<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\JsonResponse;

class VehicleController
{

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $vehicles = Vehicle::select('id', 'modelo')->get();

        if (empty($vehicles)) {
            return response()->json(['data' => 'Nenhum veículo encontrado!', 'hasError' => false], 203);
        }

        return response()->json(['data' => $vehicles, 'hasError' => false], 202);
    }

    public function detail(int $id): JsonResponse
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['data' => 'Nenhum veículo encontrado!', 'hasError' => false], 404);
        }

        return response()->json(['data' => $vehicle, 'hasError' => false], 202);
    }
}
