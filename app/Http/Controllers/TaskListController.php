<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskListController extends Controller
{
    public function create()
{
    // Show the create form
    return view('tasklists.create');
}

public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        // Add any other validation rules as needed
    ]);

    // Create a new TaskList instance
    $taskList = new TaskList;

    // Assign the form data to the TaskList instance
    $taskList->name = $validatedData['name'];
    // Add any other fields as needed

    // Save the TaskList instance to the database
    $taskList->save();

    // Redirect the user to the index page with a success message
    return redirect('/tasklists')->with('success', 'TaskList created successfully.');
}

public function index()
{
    // Get all the TaskLists from the database
    $taskLists = TaskList::all();

    // Show the index page with the TaskLists
    return view('tasklists.index', ['taskLists' => $taskLists]);
}

public function show($id)
{
    // Find the TaskList with the given ID
    $taskList = TaskList::findOrFail($id);

    // Show the TaskList details page
    return view('tasklists.show', ['taskList' => $taskList]);
}
public function edit($id)
{
    // Find the TaskList with the given ID
    $taskList = TaskList::findOrFail($id);

    // Show the edit form
    return view('tasklists.edit', ['taskList' => $taskList]);
}

public function update(Request $request, $id)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        // Add any other validation rules as needed
    ]);

    // Find the TaskList with the given ID
    $taskList = TaskList::findOrFail($id);

    // Update the TaskList with the form data
    $taskList->name = $validatedData['name'];
    // Add any other fields as needed

    // Save the updated TaskList to the database
    $taskList->save();

    // Redirect the user to the index page with a success message
    return redirect('/tasklists')->with('success', 'TaskList updated successfully.');
}

public function destroy($id)
{
    // Find the TaskList with the given ID
    $taskList = TaskList::findOrFail($id);

    // Delete the TaskList from the database
    $taskList->delete();

    // Redirect the user to the index page with a success message
    return redirect('/tasklists')->with('success', 'TaskList deleted successfully.');
}

}
