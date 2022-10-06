@php

$banners = [
    '/assets/images/banners/banner-dilltea.png',
    '/assets/images/banners/banner-dilltea.png',
    '/assets/images/banners/banner-dilltea.png'
];

$lineups = [
    [
        'title' => 'Artisanally Crafted Tea',
        'prefix' => 'crafted-tea',
        'count' => 3,
    ],
];

@endphp

@extends('_layouts.blank')

@section('body')
    <header class="py-5 px-4 lg:px-8">
        <ul role="navigation" class="flex flex-wrap items-center justify-between uppercase text-sm font-semibold">
            <li class="w-full sm:w-auto flex sm:block flex-col items-center mb-6 sm:mb-0">
                <a href="#" class="inline-block" title="Dilltea">
                    <h1 class="hidden">Dilltea</h1>
                    <img src="/assets/images/dilltea/dilltea.png" class="w-12 sm:w-10" />
                </a>
            </li>
            <li class="border-b-2 border-dilltea hover:opacity-70">
                <a href="#" class="block">Home</a>
            </li>
            <li class="border-b-2 border-transparent hover:opacity-70">
                <a href="#" class="block">About</a>
            </li>
            <li class="border-b-2 border-transparent hover:opacity-70">
                <a href="#" class="block">Catalog</a>
            </li>
            <li class="border-b-2 border-transparent hover:opacity-70">
                <a href="#" class="block">Contact</a>
            </li>
            <li class="border-b-2 border-transparent hover:opacity-70">
                <button class="block focus:outline-none">
                    <x-icons.search size="18" />
                </button>
            </li>
        </ul>
    </header>

    <main class="bg-dilltea text-white py-4 sm">

        {{-- banners --}}
        <section id="dilltea-banners" class="max-w-screen-xl-720 mx-auto px-6 md:px-8 mb-4">
            <x-embla-images :images="$banners" classes='embla--master-view' imageClasses="max-h-72">
                <button class="embla__prev-button absolute left-5 ml-2 top-45">
                    <x-icons.prev size="24" fill='white' />
                </button>
                <button class="embla__next-button absolute right-5 mr-2 top-45">
                    <x-icons.next size="24" fill='white' />
                </button>
                <div class="absolute top-65 xs:top-70 md:top-80 xl:top-85 right-45 md:right-50">
                    @for ($i = 0; $i < count($banners); $i++)
                        <button class="embla__dot-button mx-1"></button>
                    @endfor
                </div>
            </x-embla-images>
        </section>

        {{-- best sellers --}}
        <section id="flavorich-best-seller" class=" max-w-screen-md mb-4 px-6 lg:mx-auto">
            <h2 class="uppercase text-4xl font-bold tracking-wide text-center">Best Seller</h2>
            <div>
                <div class="py-6 flex flex-col items-center">
                    <div class="w-32 p-2 mb-4 bg-white rounded-full">
                        <img src="/assets/images/dilltea/lineup-crafted-tea3.png" alt="/assets/images/dilltea/lineup-crafted-tea3.png">
                    </div>
                    <h3 class="uppercase text-xl">Sweet Matcha</h3>
                </div>
            </div>
        </section>

        {{-- line up --}}
        <section id="dilltea-lineup" class="max-w-screen-xl-768 mb-8 lg:mb-16 px-6 lg:mx-auto">
            @foreach ($lineups as $lineup)
                <div class="border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center p-4">
                        <h4 class="uppercase text-2xl md:text-3xl tracking-wide font-semibold block md:w-56 md:mr-8 md:flex-none">
                            {{ $lineup['title'] }}
                        </h4>
                        @php
                            $images = [];
                            while (count($images) < 6) {
                                for ($i = 0; $i < $lineup['count']; $i++) {
                                    array_push($images, '/assets/images/dilltea/lineup-' . $lineup['prefix'] . ($i + 1) . '.png');
                                }
                            }
                        @endphp
                        <div id="{{ 'lineup-slider-' . $lineup['prefix'] }}">
                            <x-embla-images :images="$images" slideClasses="mx-1 p-1 bg-yellow-100">
                                <button class="embla__next-button absolute right-0 mr-2 top-45">
                                    <x-icons.next size="24" fill='white' />
                                </button>
                            </x-embla-images>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        {{-- recipes --}}
        <section id="dilltea-recipes" class="max-w-screen-xl-768 mx-auto px-6">
            <div class="flex flex-col lg:flex-row mb-2">
                <div class="mb-4 lg:mr-10">
                    <h2 class="text-6xl md:text-8xl uppercase font-bold tracking-wide leading-none mb-4">Recipes</h2>
                    <p class="text-justify text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip

                        ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
                        tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero

                        eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                        augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip

                        ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
                        tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.
                    </p>
                </div>
                <x-video-thumb size='large' buttonClasses="bg-dilltea" />
            </div>
            <div class="flex overflow-x-auto -mx-4 justify-between py-6">
                @for ($i = 0; $i < 4; $i++)
                    <div class="m-4">
                        <x-video-thumb buttonClasses="bg-dilltea" />
                    </div>
                @endfor
            </div>
        </section>
    </main>

    <footer id="join-us" class="max-w-screen-xl-768 mx-auto py-8 px-6 bg-white text-gray-900">
        <h2 class="text-center uppercase text-4xl tracking-wide font-bold mb-10">
            <span class="border-b-4 border-yellow-400">Join</span>
            <span class="border-b-4 border-transparent">With Us</span>
        </h2>
        <div class="flex flex-col md:flex-row justify-between">
            <div class="md:max-w-md mb-6 md:mb-0">
                <h2 class="text-4xl font-semibold uppercase tracking-wider mb-2 md:mb-6">Our Full Catalogue</h2>
                <img src="/assets/images/qr-code.png">
            </div>
            <div class="md:max-w-sm md:text-right">
                <div class="mb-6">
                    <h2 class="text-4xl font-semibold uppercase tracking-wider">Phone</h2>
                    <span class="text-lg font-semibold">+62 811-2233-3761</span>
                </div>
                <div class="mb-6">
                    <h2 class="text-4xl font-semibold uppercase tracking-wider">Office</h2>
                    <span class="text-sm font-semibold">Jl. Yupiter Utama No. 106, Bandung 40286</span>
                </div>
                <ul class="flex md:justify-end">
                    <li class="mr-3 hover:opacity-70">
                        <a href="#">
                            <x-icons.linkedin size="32" />
                        </a>
                    </li>
                    <li class="hover:opacity-70">
                        <a href="#">
                            <x-icons.instagram size="32" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
@endsection
