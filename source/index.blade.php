@php

$menus = [
[ 'title' => 'home', 'link' => '/', 'active' => true ],
[ 'title' => 'about', 'link' => '#about', 'dataTarget' => 'modal-about' ],
[ 'title' => 'brands', 'link' => '#our-brands' ],
[ 'title' => 'contact', 'link' => '#contact' ],
];

$banners = [
[
'link' => '/dilltea',
'title' => 'Dilltea',
'src' => '/assets/images/banners/banner-dilltea.png'
],
[
'link' => '/dillco-chocolate',
'title' => 'Dillco Chocolate',
'src' => '/assets/images/banners/banner-dci.png'
],
[
'link' => '/flavorich',
'title' => 'Flavorich',
'src' => '/assets/images/banners/banner-flavorich.png'
],
];

$brands = [
'/assets/images/brands/brand-dci.png',
'/assets/images/brands/brand-flavorich.png',
'/assets/images/brands/brand-dilltea.png',
'/assets/images/brands/brand-kopsil.png',
'/assets/images/brands/brand-palmrich.png',
'/assets/images/brands/brand-gmn.png'
];

$stores = [
[
'link' => '#',
'icon' => '/assets/images/icon/icon-shopee.png',
'text' => 'Siliwangi Store ID'
],
[
'link' => '#',
'icon' => '/assets/images/icon/icon-tokopedia.png',
'text' => 'Siliwangi Store ID'
],
[
'link' => '#',
'icon' => '/assets/images/icon/icon-tiktok.png',
'text' => 'Siliwangi Store ID'
]
]

@endphp

@extends('_layouts.blank')

@section('body')

{{-- header --}}
<header class="flex items-center p-2 px-4 lg:px-8">
  <button id="burger-button" class="burger-menu  mr-16">
    <x-icons.burger class="w-4 h-auto" size="16px" />
  </button>
  <x-social-media-menu classes="flex items-center" listClasses="mr-2" />
  <div class="flex-1 text-center">
    <a href="/" class="inline-block text-xl font-semibold hover:opacity-70">
      <h1 title="Dillco Group">
        <span class="inline-block bg-yellow-400">d</span>illco group
      </h1>
    </a>
  </div>
  <div class="flex-none">
    <button class="block focus:outline-none hover:opacity-70">
      <x-icons.search size="18" />
    </button>
  </div>
</header>

<nav role="navigation" id="header-menu" class="hidden md:block">
  <ul class="flex justify-evenly items-center p-2 border-t border-b border-gray-800 uppercase text-sm font-semibold">
    @foreach ($menus as $menu)
    <li class="hover:opacity-70 hover:border-yellow-400 text-center flex-1 border-l border-r border-gray-600">
      <a href="{{ $menu['link'] }}" title="{{ ucwords($menu['title']) }}" data-modal="{{ $menu['dataTarget'] }}" class="border-b-4  {{ $menu['active'] ? 'border-yellow-400' : 'border-transparent' }}">{{ $menu['title'] }}</a>
    </li>
    @endforeach
  </ul>
</nav>

{{-- main container --}}
<main class="py-2">
  <div class="">
    <section class="mx-auto max-w-6xl">
      <div style="--slide-size: 100%;" class="relative px-6 banner-slider mb-10" id="homepage-banner-slider">
        <div class="overflow-hidden embla">
          <div class="flex flex-row">
            @foreach ($banners as $banner)
            <div class="flex-shrink-0 flex-grow-0" style="flex-basis: var(--slide-size);">
              @if (($banner['link'] ?? null))
              <a href="{{ $banner['link'] }}" title="{{ $banner['title'] }}" class="w-full">
                <img class="embla__slide__img rounded-3xl object-cover" src="{{ $banner['src'] }}" alt="{{ $banner['title'] }}" title="{{ $banner['title'] }}">
              </a>
              @else
              <img class="embla__slide__img rounded-3xl object-cover" src="{{ $banner['src'] }}" alt="{{ $banner['title'] }}" title="{{ $banner['title'] }}">
              @endif
            </div>
            @endforeach
          </div>
        </div>
        <button class="embla__prev-button embla__nav-button absolute left-0 top-half -translate-y-half outline-none focus:outline-none">
          <x-icons.prev size="24" fill='' class="" />
        </button>
        <button class="embla__next-button embla__nav-button absolute right-0 top-half -translate-y-half outline-none focus:outline-none">
          <x-icons.next size="24" fill='' />
        </button>
        <div class='embla-dots absolute right-50 -translate-x-1/2 flex items-center space-x-2'></div>
      </div>
    </section>

    <section id="about" class="px-6 py-12 mx-auto max-w-6xl">
      <h2 class="uppercase text-4xl font-bold tracking-wide mb-4" title="Tentang Kami">
        <span class="border-b-4 border-transparent">Tentang</span>
        <span class="border-b-4 border-yellow-400">Kami</span>
      </h2>
      <div class="flex flex-col-reverse md:flex-row md:items-center text-justify leading-8 text-lg">
        <div class="w-full md:flex-1 md:mr-12">
          <p class="mb-4">
            <span title="Dillco Group" class="font-bold text-3xl">
              <span class="inline-block bg-yellow-400">d</span>illco group
            </span> adalah perusahaan penyuplai bahan baku FnB yang berdiri sejak tahun 2013, kami menghadirkan berbagai produk yang terbuat dari bahan pilihan berkualitas tinggi. Produk Dillco Group telah memenuhi standar Halal MUI dan Badan Pengawas Obat dan Makanan (BPOM), oleh karena itu keunggulan kami di bidang kualitas yang baik disertai dengan konsistensi dalam pemantauan produk yang telah diuji dan diaudit secara berkala. Kami telah melayani banyak pelanggan, seperti: Hotel, Kafe, Restoran dan pelanggan lainnya di seluruh Indonesia.
          </p>
          <p>Selaras dengan keinginan kami dalam memperluas pangsa pasar melalui kerjasama di seluruh Indonesia, Dillco Group terus ber-komitmen untuk menghadirkan produk berkualitas dengan harga terjangkau. Dillco Group siap membantu meningkatkan kualitas usaha Anda!</p>
        </div>
        <div class="mb-4">
          <img class="mx-auto h-96 w-auto object-cover rounded-3xl" src="/assets/images/foto-pa-fadil.png" alt="Owner" />
        </div>
      </div>
    </section>

    {{-- brand slider --}}
    <section class="px-6 banner-slider mb-10 bg-gray-300 py-12" id="our-brands">
      <div id="homepage-brand-slider" class="mx-auto max-w-6xl">
        <h2 class="px-4 md:px-12 text-3xl font-bold mb-10">
          <span class="border-b-4 border-yellow-400">OUR BRANDS</span>
        </h2>
        <div class="relative">
          <div class="overflow-hidden embla">
            <div class="flex flex-row">
              @foreach ($brands as $brand)
              <div class="slider__item">
                <x-brand-product-card :image="$brand" />
              </div>
              @endforeach
            </div>
          </div>
          <button class="embla__prev-button embla__nav-button absolute top-half -translate-y-half outline-none focus:outline-none" style="left: -16px;">
            <x-icons.prev size="24" fill='' class="" />
          </button>
          <button class="embla__next-button embla__nav-button absolute top-half -translate-y-half outline-none focus:outline-none" style="right: -24px;">
            <x-icons.next size="24" fill='' />
          </button>
        </div>
      </div>
    </section>

    <section class="bg-white py-12 px-6">
      <div class="mx-auto max-w-6xl">
        <h2 class="px-4 md:px-12 text-3xl font-bold mb-10">
          <span class="border-b-4 border-yellow-400">EVENT</span>
        </h2>
        <div class="flex justify-center flex-wrap -m-4">
          @for ($i = 0; $i < 2; $i++) <div class="p-4 w-full" style="max-width: 313px;">
            <div class="w-full aspect-one-one mb-4">
              <div class="flex w-full h-full items-center justify-center border border-gray-500 rounded-3xl">
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-400">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3 22v-20l18 10-18 10z" />
                  </svg>
                </button>
              </div>
            </div>
            <p class="text-xl text-gray-500 font-semibold uppercase text-center">Jakarta Coffe Week 2022</p>
        </div>
        @endfor
        <div class="p-4 w-full" style="max-width: 313px;">
          <div class="w-full aspect-one-one flex items-center justify-center bg-yellow-400 rounded-3xl">
            <p class="text-black text-2xl md:text-5xl font-semibold uppercase text-center">Coming Soon</p>
          </div>
        </div>
      </div>
  </div>
  </section>

  <section class="py-12 bg-yellow-300 px-6">
    <div class="mx-auto max-w-6xl overflow-hidden">
      <div class="flex flex-col-reverse md:flex-row md:items-center">
        <div class="pb-4" data-aos="fade-right">
          <div class="mb-10">
            <h2 class=" text-3xl text-gray-800 font-bold">DILLCO GROUP MEMBERS PROGRAM</h2>
            <div class="h-1 w-2/4 md:w-1/4 bg-gray-800 rounded-md"></div>
          </div>
          <p class="font-bold text-lg text-gray-800 mb-4">Solusi untuk permasalahan kebutuhan bahan baku bisnis Horeca Anda</p>
          <p class="text-lg text-gray-800 mb-5">Nikmati kemudahan dalam menemukan supplier terpercaya untuk bisnis Anda. Dengan beragam produk bahan baku minuman seperti cokelat, bubuk minuman, sirup, palm sugar, dan masih banyak lagi. Kami membantu menjaga kualitas bisnis Anda dengan produk-produk terpercaya dari Dillco Group.</p>
          <a href="#" class="w-full md:w-auto py-2 px-6 bg-transparent border border-gray-800 rounded-2xl font-bold">JOIN NOW</a>
        </div>
        <div data-aos="fade-left">
          <img src="/assets/images/member-card.webp" alt="" class="md:max-w-sm h-auto object-cover" />
        </div>
      </div>
    </div>
  </section>

  <section class="py-12 px-6">
    <div class="mx-auto max-w-5xl overflow-hidden">
      <h2 class="mb-6 uppercase text-4xl font-bold text-center">OFFLINE STORE</h2>
      <img src="/assets/images/official-store.png" alt="Official Store" class="mb-6" />
      <p class="text-center text-3xl mb-12">Jl.Laswi No. 1E, Bandung 40272</p>

      <div class="flex flex-wrap justify-center lg:justify-between -m-4">
        @foreach ($stores as $store)
        <div class="p-4">
          <a href="{{ $store['link'] }}" title="{{ ucwords($store['text']) }}" class="py-2 pl-4 pr-12 flex items-center font-bold text-sm md:text-base border border-gray-800 rounded-lg">
            <img src="{{ $store['icon'] }}" alt="{{ $store['text'] }}" class="w-5 h-5 object-cover mr-4" />
            <span>{{ $store['text'] }}</span>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  </div>
</main>

{{-- footer --}}
<footer class="mx-auto max-w-screen-xl-768 px-6 py-4">
  {{-- contact --}}
  <section id="contact" class="mb-8" title="Join With Us">
    <div class="flex flex-col md:flex-row md:justify-between md:items-center items-center">
      <x-social-media-menu iconSize="32" classes="flex mb-8 md:mb-0" listClasses="mr-3" />
      <div class="md:flex md:space-x-10">
        <div class="mb-4 md:mb-0">
          <h3 class="text-4xl font-semibold uppercase text-center md:text-left" title="OFFICE">OFFICE</h3>
          <span class="text-sm text-center block md:text-left">Jl. Laswi No. 1E, Bandung 40272</span>
        </div>
        <div class="bg-black hidden md:block" style="width: 2px; height: 70px;"></div>
        <div class="">
          <h3 class="text-4xl font-semibold uppercase text-center md:text-left" title="PHONE">PHONE</h3>
          <span class="text-sm text-center block md:text-left">+62 811-2233-3761</span>
        </div>
      </div>
    </div>
  </section>
</footer>


@endsection