@extends('app')

@section('content')

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Languages, Frameworks & Libraries</h3>
    </x-fake-code-block>

    <span class="text-gray-400 italic">Hover over each icon for additional information & experience.</span>

    <div class="grid grid-cols-4 m-5 text-center">

        <x-icon-card :img="asset('images/php-icon.png')" alt="PHP icon" title="PHP">
            I have used PHP alongside Laravel to develop server side web applications.<br/><br/>
            3+ Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/laravel-icon.png')" alt="Laravel icon" title="Laravel">
            This is my primary framework for developing backend systems.<br/><br/>

            3+ Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/phpunit-icon.png')" alt="PHP Unit icon" title="PHP Unit">
            Something which I am actively using to develop various side projects. <br/><br/>

            2+ Year Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/javascript-icon.png')" alt="JavaScript icon" title="Javascript">
            Used occasionally for lightweight client side tasks.<br/><br/>

            1 Year Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/html-icon.png')" alt="HTML icon" title="HTML">
            Used extensively alongside the blade templating engine. <br/><br/>

            3+ Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/css-logo.png')" alt="CSS icon" title="CSS">
            I have a full understanding of cascading stylesheets <br/><br/>

            3+ Years Experience
        </x-icon-card>


        <x-icon-card :img="asset('images/sql-icon.png')" alt="SQL icon" title="SQL">
            I have used SQL extensively to pull data from various data sources and am comfortable querying & updating fields & joining tables.<br/><br/>

            2+ Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/livewire.png')" alt="Livewire icon" title="Laravel Livewire">
            Used to implement reactive functionality into laravel systems, extensive knowledge & understanding.<br/><br/>

            2+ Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/alpine-js.jpg')" alt="Alpine.js icon" title="Alpine.js">
            Framework designed to quickly and easily implement reactive functionality without writing extensive JavaScript<br/><br/>

            2+ Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/bootstrap-icon.png')" alt="Bootstrap icon" title="Bootstrap">
            Used extensively during my placement & employment at The Health Informatics Service <br/><br/>

            2+ Years Experience.
        </x-icon-card>

        <x-icon-card :img="asset('images/jquery-icon.png')" alt="jQuery icon" title="jQuery">
            Used extensively during my placement & employment at The Health Informatics Service <br/><br/>

            2+ Years Experience.
        </x-icon-card>

        <x-icon-card :img="asset('images/tailwind-icon.png')" alt="Tailwind icon" title="Tailwind CSS">
            Something which I am actively using to develop various side projects. <br/><br/>

            <1 Year Experience
        </x-icon-card>
    </div>

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Technologies</h3>
    </x-fake-code-block>

    <span class="text-gray-400 italic">Hover over each icon for additional information & experience.</span>

    <div class="grid grid-cols-4 gap-4 m-5">
        <x-icon-card :img="asset('images/apache-icon.png')" alt="Apache icon" title="Apache">
            Used professionally & personally to host several systems.<br/><br/>

            1 Year Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/git-icon.png')" alt="Git icon" title="Git">
            2 Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/github.jpg')" alt="GitHub icon" title="GitHub">
            2 Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/mysql-icon.png')" alt="MySQL icon" title="MySQL">
            2 Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/unix-icon.png')" alt="Bash icon" title="Unix">
            2 Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/sentry-icon.png')" alt="Sentry icon" title="Sentry">
            2 Years Experience
        </x-icon-card>

        <x-icon-card :img="asset('images/jenkins-icon.png')" alt="Jenkins icon" title="Jenkins">
            2 Years Experience
        </x-icon-card>
    </div>
@endsection
