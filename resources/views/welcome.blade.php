<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body>
        <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex item-center space-x-4">
            <div class="shrink-0">
                <img class="h-12 w-12" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="ChitChat Logo">
            </div>
            <div>
                <div class="text-xl font-medium text-black">ChitChat</div>
                <p class="text-slate-500">You have a new message!</p>
            </div>
        </div>
    </body>
</html>
