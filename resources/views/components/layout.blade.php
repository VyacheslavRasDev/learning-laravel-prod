<!doctype html>
<html lang="en" data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <x-nav/>
    <div class="px-6 flex flex-col max-h-screen  max-w-full items-start bg-gray-900 ">
        {{ $slot }}
    </div>
</body>
</html>
