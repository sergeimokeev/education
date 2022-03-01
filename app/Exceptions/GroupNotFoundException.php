<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class GroupNotFoundException extends Exception
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'error' => 'Класс под №' . $request->route('group') . ' не найден.'], 422);
    }
}
