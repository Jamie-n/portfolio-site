<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jamie Neighbours</title>
    @include('partials.head')
</head>
<body>
<div class="grid grid-cols-12 min-w-screen">
    <div class="col-span-1 bg-neutral-900">
        @include('nav')
    </div>

    <div class="relative text-center col-span-11">
        <img src="{{asset('images/RZKlw1KMk4TZ4sK7z6gRnI5KeHl85yio4vh3sLz3.jpg')}}" class="h-full" alt="">
        <div class="centered">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
