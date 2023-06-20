<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
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
<section id="about" class="py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">About Me</h2>
        <div class="text-center">
            <p class="text-xl">
                I'm a passionate full stack web developer with expertise in front-end and back-end development. I enjoy creating user-friendly web applications using HTML5, CSS3, JavaScript, React.js, Angular, Node.js, and Python. Let's connect and collaborate on exciting projects!
            </p>
            <p class="text-xl">
                I'm a Full Stack Web Developer with expertise in Python, PHP, JavaScript, Laravel, Flask, Django, SQL, CSS, HTML, Linux, Apache, React, and Vue. With over 10 years of experience, I've worked on a variety of projects, from small business websites to large e-commerce platforms.
            </p>
            <p class="text-xl">
                I'm passionate about using my skills to help businesses achieve their goals and solve their problems. Whether you need a website built from scratch or an existing site improved, I'm here to help. My clients appreciate my attention to detail, efficient workflow, and commitment to delivering high-quality work.
            </p>
            <p class="text-xl">
                Let's work together to create the perfect website for your business!
            </p>
            <ul class="list-disc text-xl text-left mt-8">
                <li>Full-stack web application development, with experience in both front-end and back-end technologies.</li>
                <li>Expertise in developing dating sites, including architecture development, matchmaking algorithms, and user experience design.</li>
                <li>Experience in developing financial projects, with a focus on user experience design and data security.</li>
                <li>Proficiency in DevOps operations, including continuous integration, automated deployment, and cloud infrastructure management.</li>
                <li>Strong understanding of Object-Oriented Programming (OOP) principles and best practices, with experience in developing scalable and maintainable applications.</li>
            </ul>
            <p class="text-xl mt-8">
                Some of my notable achievements include:
            </p>
            <ul class="list-disc text-xl text-left">
                <li>Developed a company website with online ordering and delivery, utilizing technologies such as HTML, CSS, JavaScript, and a back-end framework like OpenCart.</li>
                <li>Set up a delivery system for a cafe/caterer, including the integration of order management, payment processing, and third-party delivery services.</li>
                <li>Experienced in setting up and maintaining computer hardware and software, including desktops, laptops, servers, and networking equipment.</li>
            </ul>
        </div>
    </div>
</section>
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
