@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('task_lists.store') }}">
    @csrf

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <button type="submit">Create Task List</button>
</form>
