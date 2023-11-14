<x-layout>

    <x-breadcrumbs class="mb-10" :links="[]"></x-breadcrumbs>

    <div class="flex flex-col gap-2">
        <a href="{{ route('tasks.index') }}" class="item-title"> <x-card>
                <x-button class="item-title">Tasks</x-button>
            </x-card></a>
    </div>

</x-layout>
