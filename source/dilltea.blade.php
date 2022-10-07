---
title: Dilltea - Dillco Group
---

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

    {{-- header --}}
    <x-product-header
        accent="dilltea"
        productName="Dilltea"
        productLogo="/assets/images/dilltea/dilltea.png"
        productLogoClasses="w-12 sm:w-10"
    />

    {{-- main container --}}
    <main class="bg-dilltea text-white py-4 sm">

        {{-- banner slider --}}
        <x-product-banner-slider :banners="$banners" bannerSliderClasses="max-w-screen-xl-720" />

        {{-- best seller --}}
        <section id="best-seller" class=" max-w-screen-md mb-4 px-6 lg:mx-auto">
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

        {{-- lineup slider --}}
        <x-product-lineup-slider :lineups="$lineups" basePath="/assets/images/dilltea" />

        <x-product-recipes accent="dilltea" />
    </main>

    {{-- footer --}}
    <x-product-footer />
@endsection
