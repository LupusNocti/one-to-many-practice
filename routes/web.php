<?php
 
 use App\Http\Controllers\TaskController;
 use App\Http\Controllers\TaskListController;

 Route::get('/', [TaskController::class, 'index']);
 Route::post('/task', [TaskController::class, 'store']);
 Route::delete('/task/{task}', [TaskController::class, 'destroy']);
 Route::resource('/tasklists', TaskListController::class,);
 Route::get('task_lists/create', [TaskListController::class, 'create'])->name('task_lists.create');


Route::get('/tasklists', [TaskListController::class, 'index'])->name('task_lists.index');
Route::post('/task_lists/store', [TaskListController::class, 'store'])->name('task_lists.store');


 