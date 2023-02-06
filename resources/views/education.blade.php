@extends('app')

@section('content')

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Education</h3>
    </x-fake-code-block>

    <div class="text-center mb-20">
        <img src="{{asset('images/university-of-huddersfield-logo.png')}}" class="icon" alt="NHS & THIS logo">
        <p class="font-bold text-xl mt-5 mb-5">The University of Huddersfield <br><br> September 2019 - Present </p>
        <p class="font-bold mb-5">Software Engineering (BSc Hons)</p>
        <p class="font-bold text-sm">Final Year Modules</p>
        <ul class="mb-4">
            <li>Advanced Web Programming (A - 89%)</li>
            <li>Artificial Intelligence (Grade Pending)</li>
            <li>Distributed Cloud Server Systems</li>
            <li>Large Scale Software Engineering</li>
            <li>Final Year Project</li>
        </ul>


        <p class="font-bold text-sm ">Placement Year Modules</p>
        <ul class="mb-4">
            <li>Self Assessment Skills (A - 84%)</li>
            <li>Personal and Technical Skills (A - 83%)</li>
        </ul>

        <p class="font-bold text-sm">2nd Year Modules</p>
        <ul>
            <li>Object Oriented Systems Development (A - 100%)</li>
            <li>Cyber Security (A - 95%)</li>
            <li>Relational Databases and Web Integration (A - 93%)</li>
            <li>Operating Systems and Language Translators (A - 92%)</li>
            <li>Algorithms Processes and Data (A - 80%)</li>
            <li>Team Project (A - 78%)</li>


        </ul>

    </div>


    <div class="text-center">
        <img src="{{asset('images/highfield-logo.png')}}" class="icon" alt="JD wetherspoon logo">
        <p class="font-bold text-xl mt-5 mb-5">The Highfield School <br><br> September 2016 - September 2018 </p>

        <p class="font-bold mb-4">A Levels</p>
        <ul>
            <li>Extended Project Qualification (A)</li>
            <li>Computer Science (B)</li>
            <li>Geography (B)</li>
            <li>Business Studies (C)</li>
        </ul>
    </div>

@endsection
