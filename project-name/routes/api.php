<?php

use App\Http\Controllers\WorkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('works/relation', [\App\Http\Controllers\WorkController::class, 'relation']);

Route::get('/users/{person}/national-code', [\App\Http\Controllers\WorkController::class, 'getNationalCodeByUser']);
Route::get('/national-code/{nationalCode}/user', [WorkController::class, 'getUserByNationalCode']);

Route::get('/users/{user}/posts', [\App\Http\Controllers\WorkController::class, 'getPostsByUser']);
Route::get('/posts/{post}/user', [\App\Http\Controllers\WorkController::class, 'getUserByPost']);

Route::get('/posts/{post}/categories', [\App\Http\Controllers\WorkController::class, 'getCategoriesByPost']);
Route::get('/categories/{category}/posts', [\App\Http\Controllers\WorkController::class, 'getPostsByCategory']);
