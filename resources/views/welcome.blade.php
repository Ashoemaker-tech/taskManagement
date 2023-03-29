<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
        <!-- Styles -->
 
    </head>
    <body class="bg-gray-100">
        <div class="min-h-screen flex justify-center items-center container mx-auto">
            <div class="space-y-5 w-full">
                <h1 class="text-center text-5xl font-semibold my-8">Task Management</h1>
                <div>
                    <livewire:add-task />
                </div>
                    <livewire:task-list />
            </div>
        </div>

       
         @livewireScripts
         <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    </body>
</html>
