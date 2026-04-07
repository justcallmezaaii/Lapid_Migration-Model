<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
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
            <div class="text-gray-700">lapid_migration-model/edit-task</div>
            <div></div>
        </div>
        <div class="p-4 text-gray-900">
            <h2 class="text-2xl font-bold mb-6">Edit Task</h2>

            <form action="/tasks/{{ $task->id }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Task Title</label>
                    <input type="text" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $task->title }}" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea name="description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $task->description }}</textarea>
                </div>

                <div class="flex items-center">
                    <input type="hidden" name="is_completed" value="0">
                    <input type="checkbox" name="is_completed" value="1" class="mr-2 rounded" id="completed" {{ $task->is_completed ? 'checked' : '' }}>
                    <label class="text-sm font-medium text-gray-700" for="completed">Mark as Completed</label>
                </div>

                <div class="flex space-x-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Update Task</button>
                    <a href="/tasks" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Cancel</a>
                </div>
            </form>
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