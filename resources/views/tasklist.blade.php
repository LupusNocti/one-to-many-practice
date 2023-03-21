@extends('layouts.app')

@section('content')
    <h1>Task Lists</h1>
    <a href="{{ route('task_lists.create') }}">Create New Task List</a>
    <ul>
        @foreach ($taskLists as $taskList)
            <li>{{ $taskList->name }}</li>
            <ul>
                @foreach ($taskList->tasks as $task)
                    <li>{{ $task->name }}</li>
                @endforeach
            </ul>
            <div>
                <a href="{{ route('task_lists.edit', $taskList) }}">Edit</a>
                <form method="POST" action="{{ route('task_lists.destroy', $taskList) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </ul>
@endsection
