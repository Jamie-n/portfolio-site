<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jamie Neighbours</title>
    @include('partials.head')
</head>
<body>
<div class="min-w-screen flex">
    <div class="w-2/12 bg-emerald-500 min-h-screen fixed">
        @include('nav')
    </div>
    <div class="w-10/12 min-h-screen ml-80">
        <div class="bg-neutral-50 container">
            <x-fake-code-block tag="h1" class="mb-3">
                <h1 class="font-bold text-5xl">Jamie Neighbours</h1>
            </x-fake-code-block>
            <x-fake-code-block tag="h2" class="mb-5">
            <h2 class="font-bold text-3xl text-gray-400">Junior Full Stack Web Developer</h2>
            </x-fake-code-block>

            <x-fake-code-block tag="p" class="mb-6">
                <p> I am a web developer with a strong focus on developing dynamic and scalable web applications using Laravel. With an eye for design and a deep understanding of Laravel, I bring a creative approach to each project I undertake, working closely with clients to understand their needs and goals to bring their vision to life. Whether it's a simple brochure website or a complex business critical web application, I strive to deliver clean, well-structured code that meets the highest standards of quality and performance
            </x-fake-code-block>

                    <x-fake-code-block tag="p" class="mb-6">
                        Want to see some examples of my work?

                        Check out my
                        <x-anchor route="https://github.com/Jamie-n" target="_blank" rel="noreferrer">GitHub</x-anchor>
                        or the
                        <x-anchor :route="route('projects.index')">projects section</x-anchor>
                        of this website.
                    </x-fake-code-block>






            <button class="bg-emerald-500 rounded text-white p-3 hover:bg-emerald-600 ease-in-out duration-200"><i class="far fa-circle-down"></i> Download CV</button>
        </div>
        <div class="p-8">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
