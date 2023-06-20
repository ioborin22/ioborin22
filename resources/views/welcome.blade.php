<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Full Stack Web Developer</title>
    @include('include.fonts')
    @include('include.css')
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('include.image')
        <p class="mt-6 dark:text-white">I'm a passionate full stack web developer with expertise in front-end and back-end development. I enjoy creating user-friendly web applications using HTML5, CSS3, JavaScript, React.js, Angular, Node.js, and Python. Let's connect and collaborate on exciting projects!.</p>
        @include('include.projects')
    </div>
</div>
@include('include.footer')
</body>
</html>
