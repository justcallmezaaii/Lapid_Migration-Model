<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://images.icon-icons.com/2963/PNG/512/macos_big_sur_download_folder_icon_186042.png" />
    <style>
        @import url('https://fonts.cdnfonts.com/css/sf-pro-display');
        body{
        font-family: 'SF Pro Display', sans-serif;
        background-image: url("https://github.com/justcallmezaaii/porfolio/blob/main/src/macos_walp5.jpg?raw=true");
        background-size: cover;
        background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen py-8 relative">
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
    </div>

    <div class="absolute top-16 left-1/4 w-1/2 bg-white shadow-lg rounded-md">
        <div class="flex items-center justify-between bg-gray-200 px-3 py-1 rounded-t-md">
            <div class="flex space-x-2">
                <span class="w-3 h-3 bg-red-500 rounded-full inline-block"></span>
                <span class="w-3 h-3 bg-yellow-500 rounded-full inline-block"></span>
                <span class="w-3 h-3 bg-green-500 rounded-full inline-block"></span>
            </div>
            <div class="text-gray-700">lapid_migration-model/tasks</div>
            <div></div>
        </div>
        <div class="p-4 text-gray-900">
            <div class="flex justify-between items-center mb-16">
                <h1 class="text-3xl font-bold">My Tasks</h1>
                <a href="https://scaling-funicular-gwg6qjrxw6r2p9wq-8000.app.github.dev/tasks/create" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add New Task</a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
            @endif

            <div class="overflow-hidden rounded-lg shadow-md">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $task->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <span class="px-2 py-1 rounded-full text-sm text-white {{ $task->is_completed ? 'bg-green-500' : 'bg-yellow-500' }}">
                                    {{ $task->is_completed ? 'Completed' : 'Pending' }}
                                </span>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="https://scaling-funicular-gwg6qjrxw6r2p9wq-8000.app.github.dev/tasks/{{ $task->id }}/edit" class="bg-blue-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-600 mr-2">Edit</a>
                                
                                <form action="https://scaling-funicular-gwg6qjrxw6r2p9wq-8000.app.github.dev/tasks/{{ $task->id }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-600" onclick="return confirm('Delete this task?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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