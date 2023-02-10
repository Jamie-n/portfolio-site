@extends('app')

@section('content')

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Languages, Frameworks & Libraries</h3>
    </x-fake-code-block>

    <span class="text-gray-400 italic">Hover over each icon for additional information & experience.</span>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4 m-5">

        @foreach($languagesAndFrameworks as $languageOrFramework)
            <x-icon-card :img="$languageOrFramework->img_asset_path" :alt="$languageOrFramework->img_alt_text" :title="$languageOrFramework->name">
                {{$languageOrFramework->description}}<br/><br/>
                {{$languageOrFramework->years_experience}} Years Experience.
            </x-icon-card>
        @endforeach
    </div>

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Technologies</h3>
    </x-fake-code-block>

    <span class="text-gray-400 italic">Hover over each icon for additional information & experience.</span>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4 m-5">

        @foreach($technologies as $technology)
            <x-icon-card :img="$technology->img_asset_path" :alt="$technology->img_alt_text" :title="$technology->name">
                {{$technology->description}}<br/><br/>
                {{$technology->years_experience}} Years Experience.
            </x-icon-card>
        @endforeach
    </div>
@endsection
