<x-layout>

    @isset($task)
    <x-breadcrumbs :links="[
        'Tasks' => route('tasks.index'),
        $task->title => '#',
    ]"></x-breadcrumbs>
    @else
    <x-breadcrumbs :links="[
        'Tasks' => route('tasks.index'),
        'Create task' => '#',
    ]"></x-breadcrumbs>
    @endisset


    <form method="post" action="{{ isset($task) ? route('tasks.update', ['task' => $task]) : route('tasks.store') }}"
        enctype="multipart/form-data">

        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div class="mb-10">

            <div class="mb-2">
                <x-label for="title">Título</x-label>
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
                <x-text-input :value="$task->title ?? old('title')" name="title" />
            </div>

            <div class="mb-2">
                <x-label for="description" >Descrição</x-label>
                @error('description')
                    <p class="error">{{ $message }}</p>
                @enderror
                <x-textarea name="description" id="description" class="input mb-4" rows="5">{{ $task->description ?? old('description') }}</x-textarea>
            </div>


        <div class="mb-10">
        </div>
        <div class="flex justify-between items-baseline"></div>

            <x-button type="submit" class="btn h-10 w-full flex items-center justify-center">{{ isset($task) ? 'Edit task' : 'Create task' }}</x-button>
        </div>
    </form>

</x-layout>
