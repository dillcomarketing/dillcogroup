@php

$menus = [
    [ 'title' => 'home', 'link' => '/', 'active' => true ],
    [ 'title' => 'about', 'link' => '#about' ],
    [ 'title' => 'brands', 'link' => '#homepage-brand-slider' ],
    [ 'title' => 'catalog', 'link' => '#homepage-brand-slider' ],
    [ 'title' => 'contact', 'link' => '#contact' ],
];

$banners = [
    '/assets/images/banners/banner-dilltea.png',
    '/assets/images/banners/banner-dci.png',
    '/assets/images/banners/banner-flavorich.png',
    '/assets/images/banners/banner-fine-choco-resized.png',
];

$brands = [
    '/assets/images/brands/brand-dci.png',
    '/assets/images/brands/brand-flavorich.png',
    '/assets/images/brands/brand-dilltea.png',
    '/assets/images/brands/brand-kopsil.png',
    '/assets/images/brands/brand-palmrich.png',
    '/assets/images/brands/brand-gmn.png'
];

@endphp

@extends('_layouts.blank')

@section('body')

    {{-- header --}}
    <header class="flex items-center p-2 px-4 lg:px-8">
        <x-social-media-menu listClasses="mr-2" />
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

    {{-- site menus --}}
    <nav role="navigation">
        <ul class="flex justify-evenly items-center p-2 border-t border-b border-gray-800 uppercase text-sm font-semibold">
            @foreach ($menus as $menu)    
                <li class="border-b-4 hover:opacity-70 hover:border-yellow-400 mx-1 {{ $menu['active'] ? 'border-yellow-400' : 'border-transparent' }}">
                    <a href="{{ $menu['link'] }}" title="{{ ucwords($menu['title']) }}">{{ $menu['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    
    {{-- main container --}}
    <main class="mx-auto max-w-screen-xl-768 py-2">
        <div class="mx-6">

            {{-- banner slider --}}
            <section id="product-banner-slider" class="mb-4 md:mb-8 -mx-2 sm:mx-0">
                <x-embla-images :images="$banners" classes='embla--master-view'>
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

            {{-- about --}}
            <section id="about" class="mb-4">
                <h2 class="uppercase text-4xl font-bold tracking-wide mb-4" title="Tentang Kami">
                    <span class="border-b-4 border-transparent">Tentang</span>
                    <span class="border-b-4 border-yellow-400">Kami</span>
                </h2>
                <div class="flex text-justify leading-8 text-lg">
                    <div class="w-full lg:w-1/2 lg:mr-8">
                        <p class="mb-4">
                            Dillco Group adalah perusahaan penyuplai bahan baku FnB yang berdiri sejak tahun 2013,
                            kami menghadirkan berbagai produk yang terbuat dari bahan pilihan berkualitas tinggi.
                            Produk Dillco Group telah memenuhi standar Halal MUI dan Badan Pengawas Obat dan Makanan (BPOM),
                            oleh karena itu keunggulan kami di bidang kualitas yang baik disertai dengan
                            konsistensi dalam pemantauan produk yang telah diuji dan diaudit secara berkala.
                            Kami telah melayani banyak pelanggan, seperti: Hotel, Kafe, Restoran
                            dan pelanggan lainnya di seluruh Indonesia.
                        </p>
                        <p>
                            Selaras dengan keinginan kami dalam memperluas pangsa pasar melalui kerjasama
                            di seluruh Indonesia, Dillco Group terus ber-komitmen untuk menghadirkan produk berkualitas
                            dengan harga terjangkau. Dillco Group siap membantu meningkatkan kualitas usaha Anda!
                        </p>
                    </div>
                    <span class="bg-pa-fadil hidden md:block lg:w-1/2 -my-32"></span>
                </div>
            </section>

            {{-- brand slider --}}
            <section id="homepage-brand-slider" class="mt-8 lg:mt-32 mb-8">
                <x-embla-images :images="$brands" slideClasses="mx-1" />
            </section>
        </div>
    </main>

    {{-- footer --}}
    <footer class="mx-auto max-w-screen-xl-768">

        {{-- contact --}}
        <section id="contact" class="mb-8" title="Join With Us">
            <h2 class="text-center uppercase text-4xl tracking-wide font-bold mb-5">
                <span class="border-b-4 border-yellow-400">Join</span>
                <span class="border-b-4 border-transparent">With Us</span>
            </h2>
            <x-social-media-menu iconSize="32" classes="justify-center mb-8" listClasses="mr-3" />
            <div class="flex flex-wrap justify-between">
                <div class="m-4">
                    <h3 class="text-4xl font-semibold uppercase" title="Offline Store">Offline Store</h3>
                    <span class="text-sm">Jl. Laswi No. 1E, Bandung 40272</span>
                </div>
                <div class="m-4">
                    <h3 class="text-4xl font-semibold uppercase" title="Office">Office</h3>
                    <span class="text-sm">Jl. Yupiter Utama No. 106, Bandung 40286</span>
                </div>
                <div class="m-4">
                    <h3 class="text-4xl font-semibold uppercase" title="Phone">Phone</h3>
                    <a href="tel:+6281122333761" class="text-sm hover:underline text-flavorich">
                        +62 811-2233-3761
                    </a>
                </div>
            </div>
        </section>
    </footer>
@endsection
