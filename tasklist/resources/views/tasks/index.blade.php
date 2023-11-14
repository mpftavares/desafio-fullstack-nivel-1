<x-layout>
    <div>

        <x-breadcrumbs :links="[
            'Tasks' => route('tasks.index')
        ]"></x-breadcrumbs>

        <div class="space-y-2 mb-4">
            @forelse ($tasks as $task)
                <div>
                    <a href="{{ route('tasks.show', ['task' => $task]) }}" @class(['line-through' => $task->completed])>
                        {{ $task->title }}
                    </a>
                </div>
            @empty
                <div>There are no tasks</div>
            @endforelse
        </div>

        <nav class="mb-4">
            <x-button-link href="{{ route('tasks.create') }}" class="link">Add task</x-button-link>
        </nav>

        @if ($tasks->count())
            <nav class="mt-4">
                {{ $tasks->links() }}
            </nav>
        @endif
    </div>
</x-layout>
