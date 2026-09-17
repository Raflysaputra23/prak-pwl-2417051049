<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <div class="min-h-screen flex flex-col items-center justify-center gap-10">
    <img src="{{ Vite::asset('resources/images/rafly.jpeg') }}" alt="my" class="w-34 h-34 rounded-full border object-cover" />
    <div class="space-y-2 w-40">
        <div class="w-full py-2 bg-gray-400 text-center">
            {{ $nama }}
        </div>
        <div class="w-full py-2 bg-gray-400 text-center">
            {{ $kelas }}
        </div>
        <div class="w-full py-2 bg-gray-400 text-center">
            {{ $npm }}
        </div>
    </div>
</div>
</body>
</html>