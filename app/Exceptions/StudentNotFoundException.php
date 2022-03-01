<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StudentNotFoundException extends NotFoundHttpException
{
    public function render($request): JsonResponse
    {
        return response()->json([
            'error' => 'Студент под №' . $request->route('student') . ' не найден.'], 422);
    }
}
