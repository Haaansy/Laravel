<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>TailwindCSS</title>
</head>
<body class="bg-slate-900">
    <h1 class="text-white m-5 text-5xl font-mono">Task List</h1>
    <div>
        <div class="mx-5 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Add New Task</h2>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                    <input type="text" name="title" id="title" required 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea name="description" id="description" rows="3" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"></textarea>
                </div>
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_completed" class="rounded text-blue-500">
                        <span class="ml-2 text-gray-700">Completed</span>
                    </label>
                </div>
                <div class="flex justify-end">
                    <button type="submit" 
                        class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:bg-blue-600">
                        Add Task
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>