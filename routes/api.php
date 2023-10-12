<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use Illuminate\Support\Facades\Route;


Route::apiResource('v1/post', PostV1::class)->only(['index', 'show', 'destroy'])->middleware('auth:sanctum');
Route::apiResource('v2/post', PostV2::class)->only(['index', 'store', 'show', 'update', 'destroy'])->middleware('auth:sanctum');
Route::post('login', [LoginController::class, 'login']);
