<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jamie Neighbours</title>
    @include('partials.head')
</head>
<body>
<div class="min-w-screen flex">
    <span class="md:hidden text-black show-hide-menu text-3xl absolute top-8 left-8 hover:text-black ease-in-out duration-200 z-10" id="show_hide_button"><i class="fas fa-bars"></i></span>
    <div class="sidebar bg-emerald-500 min-h-screen hidden md:block fixed" id="sidebar">
        @include('nav')
    </div>
    <div class="content">
        <div class="bg-neutral-50 py-16 px-12">
            <x-fake-code-block tag="h1" class="mb-3">
                <h1 class="font-bold text-5xl">Jamie Neighbours</h1>
            </x-fake-code-block>
            <x-fake-code-block tag="h2" class="mb-5">
            <h2 class="font-bold text-3xl text-gray-400">Full Stack Laravel Developer</h2>
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
        </div>

        <div class="p-8 py-10 md:py-0">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
