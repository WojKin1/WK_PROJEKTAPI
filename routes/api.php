<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeopleController;

Route::get('kin/305371/people', [PeopleController::class, 'index']);
Route::post('kin/305371/people', [PeopleController::class, 'create']);
Route::get('kin/305371/people/{people}', [PeopleController::class, 'show']);
Route::put('kin/305371/people/{people}', [PeopleController::class, 'update']);
Route::delete('kin/305371/people/{people}', [PeopleController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
