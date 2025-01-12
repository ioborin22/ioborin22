<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Web Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
@include('include.nav')
<!--Container-->
<div class="container w-full md:max-w-3xl mx-auto pt-20">
    <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
        <!--Title-->
        @include('include.image')
        <section id="about" class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8">About Me</h2>
                <p class="text-lg">I'm a passionate full stack web developer with expertise in front-end and back-end development. I enjoy creating user-friendly web applications using HTML5, CSS3, JavaScript, React.js, Angular, Node.js, and Python. Let's connect and collaborate on exciting projects!.</p>
            </div>
        </section>
        <section id="projects" class="py-20 bg-gray-200">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8">My Projects</h2>
                <div class="flex flex-wrap justify-center">
                    <a target="_blank" href="https://getwab.com" class="w-full sm:w-auto max-w-xl bg-white shadow-lg rounded-lg p-6 mx-4 mb-8 hover:bg-gray-100">
                        <div class="flex items-center">
                            <img src="{{ asset('/getwab.com/getwab.svg') }}" alt="Project 1" class="mr-4" style="width: 32px; height: 32px;">
                            <h3 class="text-xl font-bold mb-0 text-gray-500">GETWAB.COM - Free Dating</h3>
                        </div>
                        <p class="text-gray-800 mt-2">GETWAB.COM is a free online dating platform for unusual people. It brings together individuals who embrace their uniqueness and are seeking meaningful connections. Join us to discover like-minded individuals, forge deep connections, and explore the world of online dating in a safe and inclusive environment.</p>
                    </a>
                    <a href="{{ route('fake-database-api.index') }}" class="w-full sm:w-auto max-w-xl bg-white shadow-lg rounded-lg p-6 mx-4 mb-8 hover:bg-gray-100">
                        <div class="flex items-center">
                            <img src="{{ asset('/fake-database-api/fake-database-api.svg') }}" alt="Project 2" class="mr-4" style="width: 32px; height: 32px;">
                            <h3 class="text-xl font-bold mb-0 text-blue-600">Fake Database API</h3>
                        </div>
                        <p class="text-gray-800 mt-2">The Fake Database API is a simulated API providing a mock database with users, employers, posts, images, contacts, messages, products, and orders. It aids developers in testing and prototyping applications without a real production database.</p>
                    </a>
                    <a href="{{ route('fundamental-messenger.index') }}" class="w-full sm:w-auto max-w-xl bg-white shadow-lg rounded-lg p-6 mx-4 mb-8 hover:bg-gray-100">
                        <div class="flex items-center">
                            <img src="{{ asset('/fundamental-messenger/chat-conversation-svgrepo-com.svg') }}" alt="Project 3" class="mr-4" style="width: 32px; height: 32px;">
                            <h3 class="text-xl font-bold mb-0 text-green-600">Fundamental Messenger</h3>
                        </div>
                        <p class="text-gray-800 mt-2">Web Messenger Template: A versatile web application template for creating a messaging platform with essential features like contact management, real-time messaging, blocking functionality, and efficient search capabilities.</p>
                    </a>
                </div>
            </div>
        </section>
@include('include.footer')
</body>
</html>
@include('include.script')

<a href=""></a>
