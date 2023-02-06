@extends('app')

@section('content')

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Work Experience</h3>
    </x-fake-code-block>

    <div class="text-center mb-20">
        <img src="{{asset('images/NHS-lozenge.jpg')}}" class="icon" alt="NHS & THIS logo">
        <p class="font-bold text-xl mt-5 mb-5">The Health Informatics Service <br><br> Jun 2020 - Present </p>


        Initially starting as a sandwich year placement, my contract was extended beyond the initial 1 year end date. Working as a Laravel developer within a team of 2 other developers working for Calderdale and Huddersfield Foundation NHS Trust (CHFT) to enhance digital maturity.
        The majority of the role consists with consulting with clients within the Trust and bringing their systems to life to enhance existing business processes and translating these into digital systems.<br/><br/> My main responsibilities are:<br/><br/>
        <ul>
            <li>Consulting & Communicating with Clients.</li>
            <li>Designing & Modelling Systems.</li>
            <li>Developing Laravel Applications to Specification.</li>
            <li>Upgrading and Maintaining Existing Systems.</li>
            <li>Enhancing Existing Systems on Request.</li>
            <li>Monitoring Sentry for Errors.</li>
            <li>Responding to and Resolving Logged Bug Reports.</li>
            <li>Ensuring all Sites Developed Comply with <x-anchor route="https://service-manual.nhs.uk/accessibility/what-all-NHS-services-need-to-do" target="_blank" rel="noreferrer">WCAG AA</x-anchor> Minimum.</li>
        </ul>
    </div>


    <div class="text-center">
        <img src="{{asset('images/js-wetherspoon.png')}}" class="icon" alt="JD wetherspoon logo">
        <p class="font-bold text-xl mt-5 mb-5">JD Wetherspoon <br><br> Oct 2017 - Nov 2019 </p>

        Initially starting as a weekend job whilst attending 6th form, my employment continued after deciding to take a gap year before attending university. During this year I was promoted twice, first to Team Leader and then to Shift Leader. I left this postion in 2019 to focus on my studies.<br/><br/>
        During my time at JD Wetherspoon my main responsibilities were:<br/><br/>
        <ul>
            <li>Managing up to 15 Front of House Staff and up to 6/7 Kitchen Staff</li>
            <li>Communicating with Customers</li>
            <li>Manging and Ordering Stock</li>
            <li>Closing and Opening including Cash Management and Security Tasks</li>
            <li>Conducting Staff Training & Ensuring that Drinks and Food are Served to Specification</li>
        </ul>
    </div>

@endsection
