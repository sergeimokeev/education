<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class LectureNotFoundException extends Exception
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'error' => 'Лекция под №' . $request->route('lecture') . ' не найден.'], 422);
    }
}
