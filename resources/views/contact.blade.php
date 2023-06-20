<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
<header class="bg-blue-500 text-white py-4">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between">
            <a href="{{route('welcome')}}" class="text-xl font-bold">IOborin22</a>
            <ul class="flex space-x-4">
                <li><a href="{{route('about')}}" class="hover:text-blue-200">About</a></li>
                <li><a href="{{route('projects')}}" class="hover:text-blue-200">Projects</a></li>
                <li><a href="{{route('contact')}}" class="hover:text-blue-200">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Feedback Form</h1>
    <form action="#" method="POST">
        <div class="mb-4">
            <label for="name" class="text-lg">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="email" class="text-lg">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="message" class="text-lg">Message:</label>
            <textarea id="message" name="message" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" rows="5" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Submit</button>
        </div>
    </form>
</main>

<footer class="bg-blue-500 text-white py-4">
    <div class="container mx-auto px-4">
        <div class="flex justify-center space-x-4">
            <a href="https://www.linkedin.com/in/ioborin22/" class="text-xl hover:text-blue-200">LinkedIn</a>
            <a href="https://github.com/ioborin22" class="text-xl hover:text-blue-200">GitHub</a>
            <a href="https://twitter.com/ioborin22" class="text-xl hover:text-blue-200">Twitter</a>
            <a href="https://www.facebook.com/ioborin22" class="text-xl hover:text-blue-200">Facebook</a>
        </div>
    </div>
</footer>

</body>
</html>
