---
title: Dillco Chocolate - Dillco Group
---

@php

$banners = [
    '/assets/images/banners/banner-fine-choco-1000g.png',
    '/assets/images/banners/banner-fine-choco-1000g.png',
    '/assets/images/banners/banner-fine-choco-1000g.png',
];

$bestSellers = [
    [
        'label' => 'The 3in1 Series',
        'title' => 'Bali Kamarasa',
        'image' => '/assets/images/dillco-chocolate/best-seller-bali.png',
        'description' => 'Minuman coklat siap seduh berbahan dasar SPECIALTY CHOCOLATE  dari daratan BALI yang memiliki sensasi rasa agak asam memberi- kan efek rasa cokelat yang light dan nutty.',
    ],
    [
        'label' => 'The Fine Choco Series',
        'title' => 'Aceh Kuala Raja',
        'image' => '/assets/images/dillco-chocolate/best-seller-aceh.png',
        'description' => 'Perpaduan nougat yang manis dan lembut memberikan rasa cokelat yang unik dengan light taste dari buah blue berry.',
    ],
    [
        'label' => 'The 3in1 Series',
        'title' => 'Java Srawana',
        'image' => '/assets/images/dillco-chocolate/best-seller-java.png',
        'description' => 'Minuman coklat siap seduh berbahan dasar SPECIALTY CHOCOLATE dari daratan Jawa yang memiliki sensasi rasa agak asam memberikan efek rasa cokelat yang pahit tapi tetap manis serta rasa buah berry.',
    ],
];

$lineups = [
    [
        'title' => 'The Classic Series',
        'prefix' => 'classic-series',
        'count' => 4,
    ],
    [
        'title' => 'Fine Choco Series',
        'prefix' => 'fine-choco-series',
        'count' => 4,
    ],
    [
        'title' => 'The 3in1 Series',
        'prefix' => '3in1-series',
        'count' => 4,
    ],
];

@endphp

@extends('_layouts.blank')

@section('body')
    <x-product-header
        accent="orange-500"
        headerClasses="border-b border-black"
        productName="Dillco Chocolate"
        productLogo="/assets/images/dillco-chocolate/dillco-chocolate.png"
        productLogoClasses="w-10 sm:w-12"
    />

    <main class="bg-orange-500 text-white py-4 sm">

        {{-- banners --}}
        <x-product-banner-slider :banners="$banners" bannerSliderClasses="max-w-screen-lg" />

        {{-- best seller --}}
        <section id="best-seller" class=" max-w-screen-md mb-4 px-6 lg:mx-auto">
            <h2 class="uppercase text-4xl font-bold tracking-wide mb-6 text-center">Best Seller</h2>
            <div>
                @foreach ($bestSellers as $bestSeller)
                    <div class="py-6">
                        <div class="flex items-center">
                            <div class="flex-none w-24 md:w-32 mr-4">
                                <img class="rounded-full" src="{{ $bestSeller['image'] }}" alt="{{ $bestSeller['image'] }}">
                            </div>
                            <div>
                                <h4 class="uppercase text-sm font-semibold">{{ $bestSeller['label'] }}</h4>
                                <h2 class="uppercase text-2xl md:text-4xl font-semibold mb-2">{{ $bestSeller['title'] }}</h2>
                                <p class="text-sm text-justify">{{ $bestSeller['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- lineup slider --}}
        <x-product-lineup-slider :lineups="$lineups" basePath="/assets/images/dillco-chocolate">
            <h3 class="uppercase text-xl font-semibold mb-4">Our Line Up</h3>
        </x-product-lineup-slider>

        {{-- recipes --}}
        <x-product-recipes accent="orange-500" />
    </main>

    {{-- footer --}}
    <x-product-footer />
@endsection
