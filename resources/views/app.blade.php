<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jamie Neighbours</title>
    @include('partials.head')
</head>
<body>
<div class="min-w-screen flex">
    <div class="w-2/12 bg-emerald-500 min-h-screen">
        @include('nav')
    </div>
    <div class="w-10/12 min-h-screen">
    @hasSection('title')
    <div class="bg-neutral-50 container">
        @yield('title')
    </div>
    @endif
    <div class="p-8">
        @yield('content')
    </div>
</div>
</body>
</html>
