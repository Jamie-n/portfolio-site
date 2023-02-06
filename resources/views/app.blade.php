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

        <h2 class="font-bold text-3xl text-gray-400 mb-5">Junior Full Stack Web Developer</h2>

        <p class="mb-5">I'm a software engineer with a background developing dynamic web applications using Laravel. Want to see some examples of my work? <br/><br/>

            Check out my <x-anchor>GitHub</x-anchor> or the <x-anchor>projects section</x-anchor> of this website.
        </p>

        <button class="bg-emerald-500 rounded text-white p-3 hover:bg-emerald-600 ease-in-out duration-200"><i class="far fa-circle-down"></i> Download CV</button>
    </div>
    <div class="p-8">
        @yield('content')
    </div>
</div>
</body>
</html>
