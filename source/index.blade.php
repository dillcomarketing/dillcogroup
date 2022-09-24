@php
$banners = ['/assets/images/index/banner-dilltea.png', '/assets/images/index/banner-dci.png', '/assets/images/index/banner-flavorich.png'];
$brands = ['/assets/images/index/dci.png', '/assets/images/index/fck.png', '/assets/images/index/dilltea.png', '/assets/images/index/kopsil.png', '/assets/images/index/palmrich.png', '/assets/images/index/gmn.png'];
@endphp

@extends('_layouts.blank')

@section('body')
    <header class="flex items-center p-2 px-4 lg:px-8">
        <ul class="flex items-center">
            <li class="mr-2 hover:opacity-70">
                <a href="#">
                    <x-icons.linkedin size="18" />
                </a>
            </li>
            <li class="mr-2 hover:opacity-70">
                <a href="#">
                    <x-icons.instagram size="18" />
                </a>
            </li>
            <li class="hover:opacity-70">
                <a href="#">
                    <x-icons.facebook size="18" />
                </a>
            </li>
        </ul>
        <div class="flex-1 text-center">
            <a href="#" class="inline-block text-xl font-semibold hover:opacity-70">
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

    <nav>
        <ul class="flex justify-evenly items-center p-2 border-t border-b border-gray-800 uppercase text-sm font-semibold">
            <li class="border-b-4 border-yellow-400 hover:opacity-70 mx-1">
                <a href="#">Home</a>
            </li>
            <li class="border-b-4 border-transparent hover:opacity-70 mx-1">
                <a href="#">About</a>
            </li>
            <li class="border-b-4 border-transparent hover:opacity-70 mx-1">
                <a href="#">Brands</a>
            </li>
            <li class="border-b-4 border-transparent hover:opacity-70 mx-1">
                <a href="#">Catalog</a>
            </li>
            <li class="border-b-4 border-transparent hover:opacity-70 mx-1">
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <main class="mx-auto max-w-screen-xlscreen py-2">
        <div class="mx-6">

            <section id="banners" class="mb-4 md:mb-8">
                <x-embla-images :images="$banners" classes='embla--master-view'>
                    <button class="embla__prev-button absolute left-5 ml-2 top-45">
                        <x-icons.prev size="24" fill='white' />
                    </button>
                    <button class="embla__next-button absolute right-5 mr-2 top-45">
                        <x-icons.next size="24" fill='white' />
                    </button>
                    <div class="absolute top-65 xs:top-70 md:top-80 xl:top-85 right-45 md:right-50">
                        <button class="embla__dot-button mx-1"></button>
                        <button class="embla__dot-button mx-1"></button>
                        <button class="embla__dot-button mx-1"></button>
                    </div>
                </x-embla-images>
            </section>

            <section id="about-us" class="mb-4">
                <h2 class="uppercase text-4xl font-bold tracking-wide mb-4">
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
                    <div class="bg-pa-fadil hidden md:block lg:w-1/2 -my-32">
                    </div>
                </div>
            </section>

            <section id="brands" class="mt-8 lg:mt-32 mb-8">
                <x-embla-images :images="$brands" slideClasses="mx-1" />
            </section>

            <section id="join-us" class="mb-8">
                <h2 class="text-center uppercase text-4xl tracking-wide font-bold mb-5">
                    <span class="border-b-4 border-yellow-400">Join</span>
                    <span class="border-b-4 border-transparent">With Us</span>
                </h2>
                <ul class="flex items-center justify-center mb-8">
                    <li class="mr-3 hover:opacity-70">
                        <a href="#">
                            <x-icons.linkedin size="32" />
                        </a>
                    </li>
                    <li class="mr-3 hover:opacity-70">
                        <a href="#">
                            <x-icons.instagram size="32" />
                        </a>
                    </li>
                    <li class="hover:opacity-70">
                        <a href="#">
                            <x-icons.facebook size="32" />
                        </a>
                    </li>
                </ul>
                <div class="flex flex-wrap justify-between">
                    <div class="m-4">
                        <h2 class="text-4xl font-semibold uppercase">Offline Store</h2>
                        <span class="text-sm">Jl. Laswi No. 1E, Bandung 40272</span>
                    </div>
                    <div class="m-4">
                        <h2 class="text-4xl font-semibold uppercase">Office</h2>
                        <span class="text-sm">Jl. Yupiter Utama No. 106, Bandung 40286</span>
                    </div>
                    <div class="m-4">
                        <h2 class="text-4xl font-semibold uppercase">Phone</h2>
                        <span class="text-sm">+62 811-2233-3761</span>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
