---
title: Dillco Chocolate - Dillco Group
---

@php

$classicSeries = [
[
'image' => '/assets/images/dillco-chocolate/line-up-classic-series-java.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-classic-java.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-classic-series-bali.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-classic-bali.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-classic-series-sulawesi.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-classic-sulawesi.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-classic-series-sumatera.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-classic-sumatera.jpg'
],
];

$fineChocoSeries = [
[
'image' => '/assets/images/dillco-chocolate/line-up-fine-choco-aceh.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-fine-choco-aceh.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-fine-choco-bali.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-fine-choco-bali.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-fine-choco-lampung.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-fine-choco-lampung.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-fine-choco-java.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-fine-choco-java.jpg'
],
];

$threeOneSeries = [
[
'image' => '/assets/images/dillco-chocolate/line-up-3in1-java.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafis-3in1-java.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-3in1-bali.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafis-3in1-bali.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-3in1-sumatera.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-3in1-sumatera.jpg'
],
[
'image' => '/assets/images/dillco-chocolate/line-up-3in1-sulawesi.png',
'alt' => '',
'image_grafik' => '/assets/images/dillco-chocolate/grafik-3in1-sulawesi.jpg'
],
];

$harvests = [
'/assets/images/dillco-chocolate/harvest-training.png',
'/assets/images/dillco-chocolate/harvest-harvesting.png',
'/assets/images/dillco-chocolate/harvest-curing.png',
'/assets/images/dillco-chocolate/harvest-pre-drying.png',
'/assets/images/dillco-chocolate/harvest-fermenting.png',
'/assets/images/dillco-chocolate/harvest-pod-breaking.png',
'/assets/images/dillco-chocolate/harvest-sun-drying.png',
'/assets/images/dillco-chocolate/harvest-sorting.png',
'/assets/images/dillco-chocolate/harvest-hight-quality.png',
'/assets/images/dillco-chocolate/harvest-social-impact.png'
];

@endphp

@extends('_layouts.blank')
@section('body_class', 'bg-dillco-image')
@section('body')
<x-product-header accent="orange-500" headerClasses="bg-dillco-header sticky top-0 left-0 right-0 z-10" productName="Dillco Chocolate" productLogo="/assets/images/dillco-chocolate/dillco-chocolate-white.png" productLogoClasses="w-10 sm:w-12" linkClasses="text-white" iconFill="white" />

<main class="text-white pt-4 pb-4 sm">

  {{-- banners --}}
  <section class="mx-auto mb-4 lg:mb-16 py-4 md:py-6" style="max-width: 1363px;">
    <div class="px-4 md:px-6">
      <img src="/assets/images/banners/banner-dci.png" alt="Dillco Chocolate" class="w-full h-auto object-cover rounded-3xl" />
    </div>
  </section>

  <section class="mx-auto mb-16 py-6" style="max-width: 1363px;">
    <div class="px-4 md:px-6">
      <h2 class="text-white font-bold text-3xl md:text-5xl mb-4">Dillco Chocolate Indonesia </h2>
      <p class="text-white text-xl md:text-3xl mb-4">In the early of 2013, there was an idea of two Agriculture Students who were so passionate in Cocoa. Their curiosity drove them to start researching and developing about the big potensials that cocoa has, with the help of their lecturer who was an expert in Cocoa.</p>
      <p class="text-white text-xl md:text-3xl mb-4">After 3 years of researching and developing, they agreed to label the project as a brand followed with their first product named ‘Java Srawana’. And finally in 2015, it was estabilshed as a brand we know today, Dillco Chocolate Indonesia (DCI). Dillco Chocolate Indonesia has a focus in the field of original Indonesian Cocoa Processing, Where Dillco Chocolate Indonesia also collaborates with Cooperatives and Cocoa Farmer Groups of all over Indonesia in order to produce the best Indonesia Chocolate.</p>
      <p class="text-white text-xl md:text-3xl mb-4">For now, Dillco Chocolate Indonesia only releases their processed variants products in the Single Estate Chocolate Powder. in 2019, Dillco Chocolate Indonesia had an oppurtunity to participate in the CoEX (Cocoa of Excellence) event to introduce the best cocoa from Indonesia, which will be held in Paris, France.</p>
    </div>
  </section>

  <div class="border-white border-b border-t">
    <section class="pt-16 pb-32 mx-auto" style="max-width: 1363px;">
      <div class="px-4 md:px-6">
        <div class="md:flex justify-between space-y-4 md:space-y-0">
          <div class="w-full md:w-5/12 flex flex-col">
            <div class="flex-1 text-white mb-4">
              <h3 class="font-bold text-xl md:text-3xl uppercase mb-6">PROCESSING</h3>
              <p class="text-xl md:text-3xl">We believe that good products come from a good cultivation. Dillco Chocolate always makes sure that our Cocoa beans come from a well-controlled, managed, and prepared source in order to have the best resulting chocolate you could enjoy anywhere</p>
            </div>
            <div class="flex-1 text-white">
              <h3 class="font-bold text-lg md:text-2xl uppercase">WHAT COLORS DO COCOA POD HAVE ?</h3>
              <p class="text-xl md:text-3xl">Immature cocoa have a variety of colors, but most of it are green, red, and purple. As they mature, their color turns yellow or orange, particularly in the creases</p>
            </div>
            <div></div>
          </div>
          <div class="w-full md:w-5/12">
            <h3 class="font-bold text-xl md:text-3xl uppercase mb-6">POST HARVEST FERMENTATION</h3>
            <div class="flex flex-col items-center justify-center w-full">
              <button id="harvest-button" class="mb-4">
                <x-icons.arrow />
              </button>
              <div id="harvest-icon">
                <div class="flex flex-wrap items-center justify-center gap-4">
                  @foreach($harvests as $harvest)
                  <div class="p-4 flex items-center justify-center flex-shrink-0 flex-grow-0" style="flex-basis: 30%;">
                    <img src="{{ $harvest }}" alt="" class="object-cover" />
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- lineup slider --}}
    <section class="py-24 mx-auto" style="max-width: 1363px;">
      <div class="px-4 md:px-6">
        <h2 class="text-white flex flex-col font-bold text-4xl md:text-6xl mb-8 pb-1 uppercase">
          <span class="block">Our Line Up</span>
          <span class="inline-block h-1 bg-white w-24"></span>
        </h2>
        <div class="space-y-4">
          <div class="md:flex justify-between items-center">
            <h3 class="uppercase font-bold text-2xl lg:text-4xl md:mr-20 mb-4 md:mb-0 md:w-full md:max-w-xs">THE CLASSIC SERIES</h3>

            <div class="flex flex-wrap lg:flex-no-wrap items-center justify-center gap-4 flex-1">
              @foreach($classicSeries as $item)
              <div class="w-full sm:w-5/12 md:w-4/12 lg:w-1/4 flex items-center justify-center">
                <x-lineup-card image="{{ $item['image'] }}" imageGrafik="{{ $item['image_grafik'] }}" />
              </div>
              @endforeach
            </div>
          </div>
          <div class="md:flex justify-between items-center">
            <h3 class="uppercase font-bold text-2xl lg:text-4xl md:mr-20 mb-4 md:mb-0 md:w-full md:max-w-xs">THE FINE CHOCO SERIES</h3>
            <div class="flex flex-wrap lg:flex-no-wrap items-center justify-center gap-4 flex-1">
              @foreach($fineChocoSeries as $choco)
              <div class="w-full sm:w-5/12  md:w-4/12 lg:w-1/4 flex items-center justify-center">
                <x-lineup-card image="{{ $choco['image'] }}" imageGrafik="{{ $choco['image_grafik'] }}" />
              </div>
              @endforeach
            </div>
          </div>
          <div class="md:flex justify-between items-center">
            <h3 class="uppercase font-bold text-2xl lg:text-4xl md:mr-20 mb-4 md:mb-0 md:w-full md:max-w-xs">THE 3IN1 SERIES</h3>
            <div class="flex flex-wrap lg:flex-no-wrap items-center justify-center gap-4 flex-1">
              @foreach($threeOneSeries as $series)
              <div class="w-full sm:w-5/12  md:w-4/12 lg:w-1/4 flex items-center justify-center">
                <x-lineup-card image="{{ $series['image'] }}" imageGrafik="{{ $series['image_grafik'] }}" />
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  {{-- recipes --}}
  <section class="mx-auto py-20 md:py-40" style="max-width: 1365px;">
    <div class="px-4 md:px-6">
      <h2 class="text-white font-bold inline-block text-2xl md:text-4xl mb-8 pb-1 uppercase border-b border-white">Recipes</h2>
      <div class="md:flex">
        <div class="w-full aspect-one-one border border-gray-800 rounded-3xl flex items-center justify-center mx-auto mb-6 md:mb-0 md:mr-8 bg-white" style="max-width: 373px;">
          <button class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="24" height="24" viewBox="0 0 24 24">
              <path d="M3 22v-20l18 10-18 10z" />
            </svg>
          </button>
        </div>
        <div class="flex-1 text-white">
          <p class="font-normal text-base md:text-3xl mb-6">Enjoy the slightly bitter taste of matcha green tea powder and full of flavor of tea in everything from drinks and bakes. Swap your regular drink or coffee with these delicious recipes tea from Dilltea.</p>
          <a href="#" class="w-full md:w-auto py-4 px-12 inline-flex bg-transparent border border-white rounded-3xl text-3xl text-center items-center justify-center font-bold hover:bg-dilltea hover:text-white">More Recipe</a>
        </div>
      </div>
    </div>
  </section>
</main>

{{-- footer --}}
<x-product-footer />
@endsection