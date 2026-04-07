<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Manager</title>
            <!-- Force cache refresh -->

            <link rel="stylesheet" href="{{ asset('build/assets/app-DSZ_oN9h.css') }}">
            <script src="{{ asset('build/assets/app-l0sNRNKZ.js') }}" defer></script>
                <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="shortcut icon" href="https://github.com/justcallmezaaii/lapid-final_project/blob/main/src/assets/logo4.webp?raw=true">
        <style>
        @import url('https://fonts.cdnfonts.com/css/sf-pro-display');
        body{
        font-family: 'SF Pro Display', sans-serif;
        background-image: url("https://github.com/justcallmezaaii/porfolio/blob/main/src/macos_walp5.jpg?raw=true");
        background-size: full;
        background-position: center;
        }
    </style>
    </head>
    <body class="bg-gray-100">
       <div class="absolute top-0 left-0 w-full flex items-center px-4 py-2 bg-white/20 backdrop-blur-xl text-white text-sm font-medium shadow-md">
        <div class="flex space-x-6">
            <span class="font-bold"> Finder</span>
            <span>File</span>
            <span>Edit</span>
            <span>View</span>
            <span>Go</span>
            <span>Windows</span>
            <span>Help</span>
        </div>
        <div class="ml-auto">
            <span id="clock"></span>
        </div>
        
    <div class="absolute top-16 left-1/4 w-1/2 bg-white shadow-lg rounded-md">
        <div class="flex items-center justify-between bg-gray-200 px-3 py-1 rounded-t-md">
            <div class="flex space-x-2">
                <a href="/" class="w-3 h-3 bg-red-500 rounded-full inline-block hover:bg-red-600"></a>
                <span class="w-3 h-3 bg-yellow-500 rounded-full inline-block"></span>
                <span class="w-3 h-3 bg-green-500 rounded-full inline-block"></span>
            </div>
            <div class="text-gray-700">lapid_migration-model/</div>
            <div></div>
        </div>
        <div class="p-4 text-gray-900 flex flex-col items-center">
            <img src="https://github.com/justcallmezaaii/lapid-final_project/blob/main/src/assets/zai2.png?raw=true" class="w-32 h-40 mx-auto  mb-4 object-cover scale-110">
            
            <h2 class="text-2xl font-bold mb-6">Welcome to Zairen's Task Manager</h2>
            <div class="flex space-x-4 mb-6">
                <a href="/tasks" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-2xl">
                    Start
                </a>
        </div>
    </div>
    <script>
        function updateTime() {
            const now = new Date();
            const options = { weekday: 'short', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit', hour12: true };
            document.getElementById("clock").textContent = now.toLocaleString("en-US", options);
        }

        setInterval(updateTime, 1000);
        updateTime();
    </script>
    </body>
</html>
