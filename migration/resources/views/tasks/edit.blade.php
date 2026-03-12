<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Task</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- This tells Laravel to treat the POST as a PUT request --}}

        <div class="mb-3">
            <label class="form-label">Task Title</label>
            <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>

        <div class="mb-3 form-check">
            {{-- Hidden input ensures 'is_completed' is sent as 0 if unchecked --}}
            <input type="hidden" name="is_completed" value="0">
            <input type="checkbox" name="is_completed" value="1" class="form-check-input" id="completed" {{ $task->is_completed ? 'checked' : '' }}>
            <label class="form-check-label" for="completed">Mark as Completed</label>
        </div>

        <button type="submit" class="btn btn-primary">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>