<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLectureRequest;
use App\Http\Requests\UpdateLectureRequest;
use App\Models\Lecture;
use Illuminate\Http\JsonResponse;

class LectureController extends Controller
{
    private Lecture $lecture;

    /**
     * @param Lecture $lecture
     */
    public function __construct(Lecture $lecture)
    {
        $this->lecture = $lecture;
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->lecture->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLectureRequest $request
     * @return JsonResponse
     */
    public function store(StoreLectureRequest $request): JsonResponse
    {
        return response()->json($this->lecture->create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param Lecture $lecture
     * @return JsonResponse
     */
    public function show(Lecture $lecture): JsonResponse
    {
        return response()->json($lecture->load(['students', 'groups']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLectureRequest $request
     * @param Lecture $lecture
     * @return JsonResponse
     */
    public function update(UpdateLectureRequest $request, Lecture $lecture): JsonResponse
    {
        $lecture->update($request->validated());
        return response()->json($lecture);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Lecture $lecture
     * @return JsonResponse
     */
    public function destroy(Lecture $lecture): JsonResponse
    {
        $lecture->delete();
        return response()->json(['message' => 'Lecture has been deleted successfully']);
    }
}
