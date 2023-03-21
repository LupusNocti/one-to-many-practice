<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskListController extends Controller
{
    function index()
{
    $taskLists = TaskList::all();
    return view('task_lists.index', compact('taskLists'));
}

// Show the form for creating a new task list
function create()
{
    return view('task_lists.create');
}

// Store a newly created task list in storage.
function store(Request $request)
{
    TaskList::create($request->all());
    return redirect()->route('task_lists.index');
}

// Show the form for editing the specified task list.
function edit(TaskList $taskList)
{
    return view('task_lists.edit', compact('taskList'));
}

// Update the specified task list in storage.
function update(Request $request, TaskList $taskList)
{
    $taskList->update($request->all());
    return redirect()->route('task_lists.index');
}

// Remove the specified task list from storage.
function destroy(TaskList $taskList)
{
    $taskList->delete();
    return redirect()->route('task_lists.index');
}
}
