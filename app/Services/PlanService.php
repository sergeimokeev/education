<?php

namespace App\Services;

use App\Exceptions\PlanNotFoundForGroupException;
use App\Models\Lecture;

class PlanService
{
    /**
     * @param $arGroup
     * @return mixed
     * @throws PlanNotFoundForGroupException
     */
    public function getPlanData($arGroup): mixed
    {
        if (!$arGroup->load(['plan'])->plan)
            throw new PlanNotFoundForGroupException();

        $planData = $arGroup->load(['plan']);
        $sortedLectures = json_decode($planData->plan->lectures, true);
        asort($sortedLectures);
        $lectureIds = array_keys($sortedLectures);
        $lectures = Lecture::whereIn('id', $lectureIds)->get();
        $planData->plan->lectures = array_values($lectures->sortby(function ($lecture) use ($lectureIds) {
            return array_search($lecture->id, $lectureIds);
        })->toArray());
        return $planData;
    }
}
