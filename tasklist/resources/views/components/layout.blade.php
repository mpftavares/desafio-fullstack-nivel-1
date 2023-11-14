<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasklist</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-10 antialiased">

    <main class="container mx-auto min-w-min max-w-3xl">

        @auth
            <nav class="flex justify-end mb-10">
                <div class="flex gap-2">
                    <p class="font-bold">{{ auth()->user()->name }}</p>
                    <p>|</p>
                    <form action="{{ route('auth.destroy') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>

                </div>
            </nav>
        @endauth


        {{ $slot }}

    </main>
</body>

</html>
