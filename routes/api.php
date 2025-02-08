<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('organizations', App\Http\Controllers\OrganizationController::class);
Route::apiResource('users', App\Http\Controllers\UserController::class);
Route::apiResource('meetings', App\Http\Controllers\MeetingController::class);
Route::apiResource('subscriptions', App\Http\Controllers\SubscriptionController::class);
Route::apiResource('roles', App\Http\Controllers\RoleController::class);
Route::apiResource('members', App\Http\Controllers\MemberController::class);
Route::apiResource('linksubscriptions', App\Http\Controllers\LinkSubscriptionController::class);
Route::apiResource('departments', App\Http\Controllers\DepartmentController::class);
Route::apiResource('linkmeetings', App\Http\Controllers\LinkMeetingController::class);



