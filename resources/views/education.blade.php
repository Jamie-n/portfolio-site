@extends('app')

@section('content')

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Education</h3>
    </x-fake-code-block>
    <div class="mb-20 mt-10">
        <img src="{{asset('images/university-of-huddersfield-logo.png')}}" class="icon" alt="NHS & THIS logo">
        <p class="font-bold text-xl mt-5 mb-5">The University of Huddersfield</p>
        <p class="font-bold text-lg mb-5">Software Engineering MSc</p>
        <p class="font-bold mb-5"> September 2023 - Present</p>
    </div>

    <div class="mb-20 mt-10">
        <img src="{{asset('images/university-of-huddersfield-logo.png')}}" class="icon" alt="NHS & THIS logo">
        <p class="font-bold text-xl mt-5 mb-5">The University of Huddersfield</p>


        <p class="font-bold text-lg mb-5">Software Engineering BSc (Hons)</p>
        <p class="font-bold mb-5"> September 2019 - May 2023 </p>

        <p class="font-bold text-sm mb-5">Degree Classification: 1:1</p>

        <p class="font-bold text-sm">Final Year Modules</p>
        <ul class="list-disc pl-5 mb-4">
            <li>Advanced Web Programming (A - 89%)</li>
            <li>Artificial Intelligence (B - 75.5%)</li>
            <li>Distributed Cloud Server Systems(A - 83.5%)</li>
            <li>Large Scale Software Engineering(A - 80.8%)</li>
            <li>Final Year Project (A - 97%)</li>
        </ul>


        <p class="font-bold text-sm ">Placement Year Modules</p>
        <ul class="list-disc pl-5 mb-4">
            <li>Self Assessment Skills (A - 84%)</li>
            <li>Personal and Technical Skills (A - 83%)</li>
        </ul>

        <p class="font-bold text-sm">2nd Year Modules</p>
        <ul class="list-disc pl-5 mb-4">
            <li>Object Oriented Systems Development (A - 100%)</li>
            <li>Cyber Security (A - 95%)</li>
            <li>Relational Databases and Web Integration (A - 93%)</li>
            <li>Operating Systems and Language Translators (A - 92%)</li>
            <li>Algorithms Processes and Data (A - 80%)</li>
            <li>Team Project (A - 78%)</li>
        </ul>
    </div>

    <div class="mb-4">
        <img src="{{asset('images/highfield-logo.png')}}" class="icon" alt="JD wetherspoon logo">
        <p class="font-bold text-xl mt-5 mb-5">The Highfield School</p>
        <p class="font-bold text-lg mb-5">A Levels</p>
        <p class="font-bold mb-5"> September 2016 - September 2018</p>
        <ul class="list-disc pl-5">
            <li>Extended Project Qualification (A)</li>
            <li>Computer Science (B)</li>
            <li>Geography (B)</li>
            <li>Business Studies (C)</li>
        </ul>
    </div>

@endsection
