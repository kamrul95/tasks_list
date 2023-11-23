<h1>Tasks list</h1>

@forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
    </div>
@empty
    <div>No task found</div>
@endforelse