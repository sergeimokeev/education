<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class PlanNotFoundForGroupException extends Exception
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'error' => 'Учебный план для класса №' . $request->route('group.id') . ' не найден.'], 422);
    }
}
