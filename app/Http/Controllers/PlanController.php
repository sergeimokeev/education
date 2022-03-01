<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\Plan;
use Illuminate\Http\JsonResponse;

class PlanController extends Controller
{
    private Plan $plan;

    /**
     * @param Plan $plan
     */
    public function __construct(Plan $plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->plan->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePlanRequest $request
     * @return JsonResponse
     */
    public function store(StorePlanRequest $request): JsonResponse
    {
        return response()->json($this->plan->create($request->validated()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePlanRequest $request
     * @param Plan $plan
     * @return JsonResponse
     */
    public function update(UpdatePlanRequest $request, Plan $plan): JsonResponse
    {
        $plan->update($request->validated());
        return response()->json($plan);
    }
}
