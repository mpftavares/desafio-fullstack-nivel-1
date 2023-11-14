<x-layout>

    <x-breadcrumbs :links="[
        'Tasks' => route('tasks.index'),
        $task->title => '#',
    ]"></x-breadcrumbs>

    <p class="mb-4 text-slate-700">{{ $task->description }}</p>

    @if ($task->long_description)
        <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500">
        Created {{ $task->created_at->diffForHumans() }} • Updated {{ $task->updated_at->diffForHumans() }}
    </p>

    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-500">Not completed</span>
        @endif
    </p>

    <div class="flex gap-2 mb-4">
        <x-button-link :href="route('tasks.edit', ['task' => $task])">Edit</x-button-link>

        <form method="post" action="{{ route('tasks.destroy', ['task' => $task]) }}">
            @csrf
            @method('DELETE')

            <x-button type="submit" class="btn">Delete</x-button>
        </form>

        <form method="post" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')

            <x-button type="submit" class="btn">Mark as
                {{ $task->completed ? 'not completed' : 'completed' }}</x-button>
        </form>

    </div>

    <nav class="mb-4">

         <x-link :href="route('tasks.index')">← Return</x-link>

    </nav>
</x-layout>
