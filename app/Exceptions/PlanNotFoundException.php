<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class PlanNotFoundException extends Exception
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'error' => 'Учебный план под №' . $request->route('plan') . ' не найден.'], 422);
    }
}
