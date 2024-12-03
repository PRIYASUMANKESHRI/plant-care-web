<?php 

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/login', [AuthController::class, 'login']);  // Custom login route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
