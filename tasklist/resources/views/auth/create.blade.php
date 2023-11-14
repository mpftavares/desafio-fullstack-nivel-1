<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        Sign-in
    </h1>

    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="post">
            @csrf

            <div class="mb-8">
                <x-label for="email" :required="true">Email</x-label>
                <x-text-input name="email" />
            </div>

            <div class="mb-8">
                <x-label for="password" :required="true">Password</x-label>
                <x-text-input name="password" type="password" />
            </div>

            <x-button class="btn w-full">Login</x-button>
        </form>
    </x-card>

</x-layout>
