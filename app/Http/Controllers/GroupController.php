<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use App\Services\PlanService;
use Illuminate\Http\JsonResponse;

class GroupController extends Controller
{
    private Group $group;

    /**
     * @param Group $group
     */
    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->group->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGroupRequest $request
     * @return JsonResponse
     */
    public function store(StoreGroupRequest $request): JsonResponse
    {
        return response()->json($this->group->create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param Group $group
     * @return JsonResponse
     */
    public function show(Group $group): JsonResponse
    {
        return response()->json($group->load(['students']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGroupRequest $request
     * @param Group $group
     * @return JsonResponse
     */
    public function update(UpdateGroupRequest $request, Group $group): JsonResponse
    {
        $group->update($request->validated());
        return response()->json($group);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Group $group
     * @return JsonResponse
     */
    public function destroy(Group $group): JsonResponse
    {
        $group->delete();
        return response()->json(['message' => 'Group has been deleted successfully']);
    }

    /**
     * @param Group $group
     * @param PlanService $planService
     * @return JsonResponse
     */
    public function getPlan(Group $group, PlanService $planService): JsonResponse
    {
//        $arGroup = $group->load(['plan']);
//        dd($arGroup);
        $data = $planService->getPlanData($group);
        return response()->json($data->plan);
    }
}
