@extends('app')

@section('content')

    <x-fake-code-block tag="h3" class="mb-3">
        <h3 class="font-bold text-3xl">Projects</h3>
    </x-fake-code-block>

    <x-fake-code-block tag="h4" class="mb-3">
        <h4 class="font-bold text-xl">Compute</h4>
    </x-fake-code-block>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
        <img src="{{asset('images/projects/compute/compute_home.png')}}" class="rounded-xl" alt="Compute homepage">
        <img src="{{asset('images/projects/compute/compute_listing.png')}}" class="rounded-xl" alt="Compute homepage">
        <img src="{{asset('images/projects/compute/create_product_with_image.gif')}}" class="rounded-xl" alt="Compute homepage">
        <img src="{{asset('images/projects/compute/product_modal.gif')}}" class="rounded-xl" alt="Compute homepage">
    </div>

    <x-fake-code-block tag="h4" class="mb-3">
        <h4 class="font-bold text-xl">CHFT Patient Leaflet Repository</h4>
    </x-fake-code-block>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
        <img src="{{asset('images/projects/PLR/plr_home.png')}}" class="rounded-xl" alt="Patient leaflet repository">
        <img src="{{asset('images/projects/PLR/patient_leaflet_repository.png')}}" class="rounded-xl" alt="Patient leaflet repository">
        <img src="{{asset('images/projects/PLR/plr_search.png')}}" class="rounded-xl" alt="Patient leaflet repository">
    </div>

    <x-fake-code-block tag="h4" class="mb-3">
        <h4 class="font-bold text-xl">CHFT CHuFT</h4>
    </x-fake-code-block>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
        <img src="{{asset('images/projects/chuft/chuft.png')}}" class="rounded-xl" alt="CHFT CHuFT Site">
        <img src="{{asset('images/projects/chuft/chuft_mid.png')}}" class="rounded-xl" alt="CHFT CHuFT Site">
    </div>

    <x-fake-code-block tag="h4" class="mb-3">
        <h4 class="font-bold text-xl">Finder</h4>
    </x-fake-code-block>

    <img src="{{asset('images/projects/finder/finder-main.png')}}" class="rounded-xl mb-4" alt="Compute homepage">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
        <img src="{{asset('images/projects/finder/finder-mid.png')}}" class="rounded-xl" alt="Compute homepage">
        <img src="{{asset('images/projects/finder/finder-base.png')}}" class="rounded-xl" alt="Compute homepage">
    </div>

@endsection
