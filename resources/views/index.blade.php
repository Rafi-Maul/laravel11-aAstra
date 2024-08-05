<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div id="app" class="flex h-screen">
        <aside id="sidebar" class="bg-slate-50 text-gray-900 w-64 h-full fixed lg:relative transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-30">
            @include('components.sidebar')
        </aside>
        <div class="flex flex-col flex-grow transition-all duration-300" id="main-content">
            <div class="header">
                @include('components.header')
            </div>
            <main class="p-4 flex-grow">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>