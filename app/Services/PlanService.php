<?php

namespace App\Services;

use App\Models\Lecture;

class PlanService
{
    /**
     * @param $arGroup
     * @return mixed
     */
    public function getPlanData($arGroup): mixed
    {
        $sortedLectures = json_decode($arGroup->plan->lectures, true);
        asort($sortedLectures);
        $lectureIds = array_keys($sortedLectures);
        $lectures = Lecture::whereIn('id', $lectureIds)->get();
        $arGroup->plan->lectures = array_values($lectures->sortby(function ($lecture) use ($lectureIds) {
            return array_search($lecture->id, $lectureIds);
        })->toArray());
        return $arGroup;
    }
}
