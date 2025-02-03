@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add Task</a>

    @foreach ($tasks as $task)
        <div class="card mt-3">
            <div class="card-body">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <p>Priority: {{ $task->priority }}</p>
                <p>Status: {{ $task->status }}</p>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
