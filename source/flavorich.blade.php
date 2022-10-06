---
title: Flavorich - Dillco Group
---

@php

$banners = [
    '/assets/images/banners/banner-flavorich.png',
    '/assets/images/banners/banner-flavorich.png',
    '/assets/images/banners/banner-flavorich.png'
];

$bestSellers = [
    'syrups' => [
        'title' => 'Premium Puree Syrup',
        'values' => [
            [
                'label' => 'Premium Puree Syrup',
                'title' => 'Lychee',
                'image' => '/assets/images/flavorich/best-seller-lychee.png',
                'description' => 'Manisnya eksotis yang cocok untuk minuman sehari-hari Anda, Manis dan segarnya buah leci akan menghadirkan kesegaran di minuman pilihan Anda.',
            ],
            [
                'label' => 'Premium Puree Syrup',
                'title' => 'Strawberry',
                'image' => '/assets/images/flavorich/best-seller-strawberry.png',
                'description' => 'Manis dan asam dari sirup stroberi yang baru dipanen yang dirancang untuk bar Anda. Mixer yang sempurna untuk membuat berbagai minuman dan makanan.',
            ],
            [
                'label' => 'Premium Syrup',
                'title' => 'Vanilla',
                'image' => '/assets/images/flavorich/best-seller-vanilla.png',
                'description' => 'Menghadirkan rasa vanilla lokal khusus untuk latte dan kopi, rasa lembut dan tajam yang meningkatkan rasa manis untuk minuman favorit Anda.',
            ],
        ],
    ],
    'beverages' => [
        'title' => 'Premium Beverage Powders',
        'values' => [
            [
                'label' => 'Premium Beverage Powder',
                'title' => 'Red Velvet',
                'image' => '/assets/images/flavorich/best-seller-red-velvet.png',
                'description' => 'Serbuk minuman yang mengandung bubuk cokelat dan ekstrak raspberry. Sehingga memiliki karakter warna seperti red velvet cake dengan cita rasa cake raspberry yang lembut, manis dan creamy.',
            ],
            [
                'label' => 'Premium Beverage Powder',
                'title' => 'Green Tea',
                'image' => '/assets/images/flavorich/best-seller-green-tea.png',
                'description' => 'Serbuk minuman yang mengandung bubuk teh hijau jenis asamica. Sehingga memiliki karakter warna seperti teh hijau dengan cita rasa yang pahit agak sepat, manis dan creamy.',
            ],
            [
                'label' => 'Premium Beverage Powder',
                'title' => 'Taro',
                'image' => '/assets/images/flavorich/best-seller-taro.png',
                'description' => 'Serbuk minuman yang mengandung bubuk teh hijau jenis asamica. Sehingga memiliki karakter warna seperti teh hijau dengan cita rasa yang pahit agak sepat, manis dan creamy.',
            ],
        ],
    ],
];

$lineups = [
    [
        'title' => 'Premium Beverage Powder',
        'prefix' => 'beverage',
        'count' => 13,
    ],
    [
        'title' => 'Premium Puree Syrup',
        'prefix' => 'syrup',
        'count' => 10,
    ],
];

@endphp

@extends('_layouts.blank')

@section('body')
    <x-product-header
        accent="flavorich"
        productName="Flavorich"
        productLogo="/assets/images/flavorich/flavorich.png"
    />

    <main class="bg-flavorich text-white py-4 sm">

        {{-- banner slider --}}
        <x-product-banner-slider :banners="$banners" bannerSliderClasses="max-w-screen-xl-720" />

        {{-- best seller --}}
        <section id="best-seller" class="max-w-screen-xl-768 mb-4 px-6 lg:mx-auto">
            <h2 class="uppercase text-4xl font-bold tracking-wide mb-6 text-center">Best Seller</h2>
            <div class="flex flex-col md:flex-row">
                @php $separate = true; @endphp
                @foreach ($bestSellers as $bestSeller)
                    <div class="my-4 md:my-0 flex-1">
                        <h3 class="uppercase font-semibold text-xl mb-4 md:mb-8">{{ $bestSeller['title'] }}</h3>
                        @foreach ($bestSeller['values'] as $value)
                            <div class="flex items-center md:items-start my-8 md:my-0 h-auto md:h-56">
                                <div class="bg-white rounded-full flex-none w-24 mr-4">
                                    <img src="{{ $value['image'] }}" alt="{{ $value['image'] }}">
                                </div>
                                <div>
                                    <h4 class="uppercase text-xs font-semibold">{{ $value['label'] }}</h4>
                                    <h5 class="uppercase text-xl font-semibold mb-2">{{ $value['title'] }}</h5>
                                    <p class="text-xs xl:text-sm text-justify">{{ $value['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if ($separate)
                        <div class="w-1 bg-gray-600 mx-12 mb-12 hidden md:block"></div>
                    @endif
                    @php $separate = false @endphp
                @endforeach
            </div>
        </section>

        {{-- lineup slider --}}
        <x-product-lineup-slider :lineups="$lineups" basePath="/assets/images/flavorich">
            <h3 class="uppercase text-xl font-semibold mb-4">Our Line Up</h3>
        </x-product-lineup-slider>

        <x-product-recipes accent="flavorich" />
    </main>

    {{-- footer --}}
    <x-product-footer />
@endsection
