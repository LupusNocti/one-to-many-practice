<?php
 
 use App\Http\Controllers\TaskController;

 Route::get('/', [TaskController::class, 'index']);
 Route::post('/task', [TaskController::class, 'store']);
 Route::delete('/task/{task}', [TaskController::class, 'destroy']);
 