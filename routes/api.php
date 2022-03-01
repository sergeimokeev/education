<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'students'], function() {
    Route::get('', [StudentController::class, 'index']);
    Route::post('', [StudentController::class, 'store']);
    Route::get('/{student}', [StudentController::class, 'show']);
    Route::put('/{student}', [StudentController::class, 'update']);
    Route::delete('/{student}', [StudentController::class, 'destroy']);
});

Route::group(['prefix' => 'groups'], function() {
    Route::get('', [GroupController::class, 'index']);
    Route::post('', [GroupController::class, 'store']);
    Route::get('/{group}', [GroupController::class, 'show']);
    Route::put('/{group}', [GroupController::class, 'update']);
    Route::delete('/{group}', [GroupController::class, 'destroy']);
    Route::get('/{group}/plan', [GroupController::class, 'getPlan']);
});

Route::group(['prefix' => 'lectures'], function() {
    Route::get('', [LectureController::class, 'index']);
    Route::post('', [LectureController::class, 'store']);
    Route::get('/{lecture}', [LectureController::class, 'show']);
    Route::put('/{lecture}', [LectureController::class, 'update']);
    Route::delete('/{lecture}', [LectureController::class, 'destroy']);
});

Route::group(['prefix' => 'plans'], function() {
    Route::get('', [PlanController::class, 'index']);
    Route::post('', [PlanController::class, 'store']);
    Route::put('/{plan}', [PlanController::class, 'update']);
});
