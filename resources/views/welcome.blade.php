<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Web Developer Ilia Oborin</title>
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

<section id="hero" class="py-10 text-center">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="rounded-full h-56 w-56 flex items-center justify-center">
                <img src="{{asset('/ioborin22.jpg')}}" alt="Profile Photo" class="rounded-full h-200 w-200">
            </div>
        </div>

        <h1 class="text-4xl font-bold mt-4">Hi, I'm Ilia! 👋</h1>
        <p class="mt-4 text-lg">Welcome to My Portfolio</p>
    </div>
</section>


<section id="about" class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">About Me</h2>
        <p class="text-lg">I'm a passionate full stack web developer with expertise in front-end and back-end development. I enjoy creating user-friendly web applications using HTML5, CSS3, JavaScript, React.js, Angular, Node.js, and Python. Let's connect and collaborate on exciting projects!.</p>
    </div>
</section>

<section id="projects" class="py-20 bg-gray-200">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">My Projects</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <a target="_blank" href="https://getwab.com" class="block bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold">GETWAB.COM free dating</h3>
                <p class="mt-4">GETWAB.COM is a free online dating platform for unusual people. It brings together individuals who embrace their uniqueness and are seeking meaningful connections. Join us to discover like-minded individuals, forge deep connections, and explore the world of online dating in a safe and inclusive environment.</p>
            </a>

            <a href="{{route('fake-database-api.index')}}" class="block bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold">{{__('Fake Database API')}}</h3>
                <p class="mt-4">The Fake Database API is a simulated API providing a mock database with users, employers, posts, images, contacts, messages, products, and orders. It aids developers in testing and prototyping applications without a real production database.</p>
            </a>

            <a href="{{route('fundamental-messenger.index')}}" class="block bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold">{{__('Fundamental Messenger')}}</h3>
                <p class="mt-4">Web Messenger Template: A versatile web application template for creating a messaging platform with essential features like contact management, real-time messaging, blocking functionality, and efficient search capabilities.</p>
            </a>

        </div>
    </div>
</section>

<footer class="bg-blue-500 text-white py-4">
    <div class="container mx-auto px-4">
        <div class="flex justify-center space-x-4">
            <a href="https://www.linkedin.com" class="text-xl hover:text-blue-200">LinkedIn</a>
            <a href="https://github.com/yourusername" class="text-xl hover:text-blue-200">GitHub</a>
            <a href="https://twitter.com/yourusername" class="text-xl hover:text-blue-200">Twitter</a>
            <a href="https://www.facebook.com/yourusername" class="text-xl hover:text-blue-200">Facebook</a>
        </div>
    </div>
</footer>

</body>
</html>
