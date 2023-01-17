@php

$menus = [
[ 'title' => 'home', 'link' => '/', 'active' => true ],
[ 'title' => 'about', 'link' => '/#about' ],
[ 'title' => 'catalog', 'link' => '#best-seller' ],
[ 'title' => 'contact', 'link' => '#contact' ],
];

@endphp

<header class="py-5 px-4 lg:px-8 {{ $headerClasses }}">
  <ul role="navigation" class="flex flex-wrap items-center justify-between uppercase text-sm font-semibold">
    <li class="w-full sm:w-auto flex sm:block flex-col items-center mb-6 sm:mb-0">
      <a href="#" class="inline-block" title="{{ $productName }}">
        <h1 class="hidden">{{ $productName }}</h1>
        <img src="{{ $productLogo }}" class="{{ $productLogoClasses ?? 'w-24 sm:w-20' }}" />
      </a>
    </li>
    @foreach ($menus as $menu)
    <li class="">
      <a href="{{ $menu['link'] }}" class="block {{ $linkClasses }}" title="{{ ucwords($menu['title']) }}">
        {{ $menu['title'] }}
      </a>
    </li>
    @endforeach
    <li class="border-b-2 border-transparent hover:opacity-70">
      <button class="block focus:outline-none">
        <x-icons.search size="18" fill="{{ $iconFill }}" />
      </button>
    </li>
  </ul>
</header>