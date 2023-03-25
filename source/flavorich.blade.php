---
title: Flavorich - Dillco Group
description: Enjoy the slightly bitter taste of matcha green tea powder and full of flavor of tea in everything from drinks and bakes. Swap your regular drink or coffee with these delicious recipes tea from Dilltea.
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

$syrupsLineups = [
'/assets/images/flavorich/lineup-syrup1.png',
'/assets/images/flavorich/lineup-syrup2.png',
'/assets/images/flavorich/lineup-syrup3.png',
'/assets/images/flavorich/lineup-syrup4.png',
'/assets/images/flavorich/lineup-syrup5.png',
'/assets/images/flavorich/lineup-syrup6.png',
'/assets/images/flavorich/lineup-syrup7.png',
'/assets/images/flavorich/lineup-syrup8.png',
'/assets/images/flavorich/lineup-syrup9.png'
]

@endphp

@extends('_layouts.blank')

@section('body')
<x-product-header accent="flavorich" productName="Flavorich" headerClasses="bg-flavorich100 opacity-90 sticky top-0 z-10" linkClasses="text-white" productLogo=" /assets/images/flavorich/flavorich-white.png" iconFill="white" />

<main class="bg-flavorich text-white py-4 sm">

  {{-- banner slider --}}
  <section class="mx-auto mb-16" style="max-width: 1365px;">
    <div class="px-6">
      <img src="/assets/images/banners/banner-flavorich.png" alt="Flavorich" class="w-full h-auto object-cover rounded-3xl" />
    </div>
  </section>

  {{-- best seller --}}
  <section id="best-seller" class="max-w-screen-xl-768 mb-4 px-6 lg:mx-auto">
    <h2 class="uppercase text-4xl font-bold tracking-wide mb-6 text-center">Best Seller</h2>
    <div class="flex flex-col md:flex-row">
      @php $separate = true; @endphp
      @foreach ($bestSellers as $bestSeller)
      <div class="my-4 md:my-0 flex-1">
        <h3 class="uppercase font-semibold text-xl mb-4 md:mb-8">{{ $bestSeller['title'] }}</h3>
        @foreach ($bestSeller['values'] as $value)
        <div class="flex items-center md:items-start my-8 md:my-0 h-auto md:h-56" data-aos="fade-up">
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
  <section class="py-10 overflow-hidden border-t border-b border-white">
    <div class="mx-auto px-6 md:pr-6" style="max-width: 1834px;">
      <div class="md:flex items-center" style="width: 120%;">
        <h2 class="text-uppercase font-bold text-2xl md:text-5xl md:w-72 md:mr-16 mb-4 flex-shrink-0">PREMIUM PUREE SYRUP</h2>
        <div id="test-lineups" class="md:pl-6">
          <div class="relative">
            <div class="embla">
              <div class="flex flex-row">
                @foreach ($syrupsLineups as $lineup)
                <div class="pl-4 flex-grow-0 flex-shrink-0" style="flex-basis: 288px;">
                  <div class="py-1 bg-yellow-300 rounded-3xl flex items-center justify-center">
                    <img src="{{ $lineup }}" alt="" class="w-full h-auto" />
                  </div>
                </div>
                @endforeach
              </div>
              <button class="embla__prev-button embla__nav-button absolute top-half -translate-y-half outline-none focus:outline-none hidden" style="left: -16px;">
                <x-icons.prev size="24" fill='' class="" />
              </button>
              <button class="embla__next-button embla__nav-button absolute top-half -translate-y-half outline-none focus:outline-none hidden" style="right: -24px;">
                <x-icons.next size="24" fill='' />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-10 overflow-hidden border-t border-b border-white">
    <div class="mx-auto px-6 md:pr-6" style="max-width: 1834px;">
      <div class="md:flex items-center" style="width: 120%;">
        <h2 class="text-uppercase font-bold text-2xl md:text-5xl md:w-72 md:mr-16 mb-4 flex-shrink-0">PREMIUM BEVERAGES POWDER</h2>
        <div id="premium-beverages-powder" class="md:pl-6">
          <div class="relative">
            <div class="embla">
              <div class="flex flex-row">
                @foreach ($syrupsLineups as $lineup)
                <div class="pl-4 flex-grow-0 flex-shrink-0" style="flex-basis: 288px;">
                  <div class="py-1 bg-yellow-300 rounded-3xl flex items-center justify-center">
                    <img src="{{ $lineup }}" alt="" class="w-full h-auto" />
                  </div>
                </div>
                @endforeach
              </div>
              <button class="embla__prev-button embla__nav-button absolute top-half -translate-y-half outline-none focus:outline-none hidden" style="left: -16px;">
                <x-icons.prev size="24" fill='' class="" />
              </button>
              <button class="embla__next-button embla__nav-button absolute top-half -translate-y-half outline-none focus:outline-none hidden" style="right: -24px;">
                <x-icons.next size="24" fill='' />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mx-auto py-20 md:py-40" style="max-width: 1365px;">
    <div class="px-6">
      <div class="md:flex">
        <div class="w-full aspect-one-one border border-white bg-white rounded-3xl flex items-center justify-center mx-auto mb-6 md:mb-0 md:mr-8" style="max-width: 373px;">
          <button class="w-10 h-10 flex items-center justify-center rounded-full bg-flavorich">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="24" height="24" viewBox="0 0 24 24">
              <path d="M3 22v-20l18 10-18 10z" />
            </svg>
          </button>
        </div>
        <div class="flex-1">
          <h2 class="text-white font-bold text-2xl md:text-5xl mb-8">Recipes</h2>
          <p class="font-normal text-base md:text-3xl text-white mb-6">Enjoy the slightly bitter taste of matcha green tea powder and full of flavor of tea in everything from drinks and bakes. Swap your regular drink or coffee with these delicious recipes tea from Dilltea.</p>
          <a href="https://www.instagram.com/flavorich.id/reels/" target="_blank" class="w-full md:w-auto py-4 px-12 inline-flex bg-transparent border border-white rounded-3xl text-3xl text-center items-center justify-center font-bold text-white hover:text-white">More Recipe</a>
        </div>
      </div>
    </div>
  </section>
</main>

{{-- footer --}}
<x-product-footer instagramLink="https://www.instagram.com/flavorich.id/" />
@endsection
