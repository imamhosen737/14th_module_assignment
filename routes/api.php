<?php

use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/task_one_two', [TasksController::class, 'task_one_two']);
Route::get('/task_three', [TasksController::class, 'task_three']);
Route::get('/task_four', [TasksController::class, 'task_four']);
Route::post('/task_five', [TasksController::class, 'task_five']);
Route::post('/task_six', [TasksController::class, 'task_six']);
Route::post('/task_seven', function (Request $request) {
    $email = $request->input('email');
    if ($email) {
        return array(
            'success' => true,
            'message' => 'Form submitted successfully.'
        );
    } else {
        return 'null';
    }
});
