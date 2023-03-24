---
title: Dilltea - Dillco Group
description: Dillco Dilltea is a micro batch artisan tea crafter based in Bandung, West Java, Indonesia. We are fervent to introduce you more about tea world!
---

@php

$banners = [
'/assets/images/banners/banner-dilltea.png',
'/assets/images/banners/banner-dilltea.png',
'/assets/images/banners/banner-dilltea.png'
];

$lineups = [
[
'image' => '/assets/images/dilltea/lineup-dilltea-1.png',
'alt' => 'Genmaicha',
'title' => 'Genmaicha'
],
[
'image' => '/assets/images/dilltea/lineup-dilltea-2.png',
'alt' => 'Hojicha',
'title' => 'Hojicha'
],
[
'image' => '/assets/images/dilltea/lineup-dilltea-3.png',
'alt' => 'Sweet Matcha',
'title' => 'Sweet Matcha'
],
[
'image' => '/assets/images/dilltea/lineup-dilltea-4.png',
'alt' => 'Pure Matcha',
'title' => 'Pure Matcha'
],
];

$bestSellers = [
[
'image' => '/assets/images/dilltea/best-seller-sweet-matcha.png',
'alt' => 'Dilltea Sweet Matcha'
],
[
'image' => '/assets/images/dilltea/best-seller-hojicha.png',
'alt' => 'Dilltea Hojicha'
],
[
'image' => '/assets/images/dilltea/best-seller-genmaicha.png',
'alt' => 'Dilltea Genmaicha'
]
]

@endphp

@extends('_layouts.blank')

@section('body')

{{-- header --}}
<x-product-header accent="dilltea" productName="Dilltea" productLogo="/assets/images/dilltea/dilltea.png" productLogoClasses="w-12 sm:w-10" iconFill='black' />

{{-- main container --}}
<main class="text-white py-4 sm">

  <section class="mx-auto mb-16" style="max-width: 1365px;">
    <div class="px-6">
      <img src="/assets/images/banners/banner-dilltea.png" alt="Dilltea" class="w-full h-auto object-cover rounded-3xl" />
    </div>
  </section>

  <section class="mx-auto mb-16" style="max-width: 1365px;">
    <div class="flex flex-col-reverse lg:flex-row md:items-center px-6">
      <div class="md:flex-1">
        <h2 class="text-appdark text-3xl sm:text-6xl md:text-8xl mb-12 md:mb-24">dilltea pureness</h2>
        <p class="text-appdark text-base sm:text-2xl md:text-3xl font-medium">dilltea is a micro batch artisan tea crafter based in Bandung, West Java, Indonesia. We are fervent to introduce you more about tea world! In wider range, we would love to have you guys experience the beauty of flavors in tea crafting! Through the ones originated in Indonesia, and all over the world. Our tea powder is a mixture of authentic Japanese tea powder, with non-dairy creamer and sugar. </p>
        <p class="text-appdark text-base sm:text-2xl md:text-3xl font-medium">We really hope we could bring you guys new exciting experience in tea tasting! Please enjoy our product, and have fun!</p>
      </div>
      <div style="--slide-size: 100%;" class="relative px-6 banner-slider mb-10 lg:mb-0 lg:w-4/12" id="dilltea-best-seller">
        <div class="overflow-hidden embla">
          <div class="flex flex-row">
            @foreach ($bestSellers as $bestSeller)
            <div class="flex-shrink-0 flex-grow-0" style="flex-basis: var(--slide-size);">
              <img class="w-full h-auto" src="{{ $bestSeller['image'] }}" alt="{{ $bestSeller['alt'] }}" title="{{ $bestSeller['alt'] }}" />
            </div>
            @endforeach
          </div>
        </div>
        <button class="embla__prev-button embla__nav-button absolute left-0 top-half -translate-y-half outline-none focus:outline-none hidden">
          <x-icons.prev size="24" fill='' class="" />
        </button>
        <button class="embla__next-button embla__nav-button absolute right-0 top-half -translate-y-half outline-none focus:outline-none">
          <x-icons.next size="24" fill='' />
        </button>
      </div>
    </div>
  </section>

  <section class="pt-10 pb-20 border-t border-b">
    <div class="px-6 mx-auto" style="max-width: 1365px;">
      <h2 class="text-appdark text-2xl md:text-4xl font-bold mb-12">Artisanally Crafted Tea</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-24">
        @foreach ($lineups as $lineup)
        <div class="flex flex-col">
          <div class="bg-yellow-200 py-10 px-16 rounded-3xl flex items-center justify-center flex-1 mb-6">
            <img src="{{ $lineup['image'] }}" alt="{{ $lineup['alt'] }}" class="w-40 h-auto" />
          </div>
          <p class="text-center text-appdark text-xl md:text-3xl">{{ $lineup['title'] }}</p>
        </div>
        @endforeach
      </div>
      <img src="/assets/images/dilltea/looseleaf-banner.png" alt="Looseleaf" class="w-full h-auto" />
    </div>
  </section>

  <section class="mx-auto py-20 md:py-40" style="max-width: 1365px;">
    <div class="px-6">
      <div class="md:flex">
        <div class="w-full aspect-one-one border border-gray-800 rounded-3xl flex items-center justify-center mx-auto mb-6 md:mb-0 md:mr-8" style="max-width: 373px;">
          <button class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="24" height="24" viewBox="0 0 24 24">
              <path d="M3 22v-20l18 10-18 10z" />
            </svg>
          </button>
        </div>
        <div class="flex-1">
          <h2 class="text-appdark font-bold text-2xl md:text-5xl mb-8">Recipes</h2>
          <p class="font-normal text-base md:text-3xl text-appdark mb-6">Enjoy the slightly bitter taste of matcha green tea powder and full of flavor of tea in everything from drinks and bakes. Swap your regular drink or coffee with these delicious recipes tea from Dilltea.</p>
          <a href="https://www.instagram.com/dillteapureness/reels/" target="_blank" class="w-full md:w-auto py-4 px-12 inline-flex bg-transparent border border-gray-800 rounded-3xl text-3xl text-center items-center justify-center font-bold text-appdark hover:bg-dilltea hover:text-white">More Recipe</a>
        </div>
      </div>
    </div>
  </section>
</main>

{{-- footer --}}
<x-product-footer instagramLink="https://www.instagram.com/dillteapureness/" />
@endsection
