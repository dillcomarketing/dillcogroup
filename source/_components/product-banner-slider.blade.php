<section id="product-banner-slider" class="mx-auto px-6 sm:px-8 mb-4 {{ $bannerSliderClasses }}">
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
