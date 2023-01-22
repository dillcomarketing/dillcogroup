<section id="product-lineup-slider" class="max-w-screen-xl-768 mb-8 lg:mb-16 px-6 lg:mx-auto">

    {{ $slot }}

    @foreach ($lineups as $lineup)
        <div class="border border-gray-200">
            <div class="flex flex-col md:flex-row md:items-center p-4">
                <h4 class="uppercase text-2xl md:text-3xl tracking-wide font-semibold block md:w-56 md:mr-8 md:flex-none">
                    {{ $lineup['title'] }}
                </h4>
                @php
                    $images = [];
                    while (count($images) < 6) {
                        for ($i = 0; $i < $lineup['count']; $i++) {
                            array_push($images, $basePath . '/lineup-' . $lineup['prefix'] . ($i + 1) . '.png');
                        }
                    }
                @endphp
                <div id="{{ 'lineup-slider-' . $lineup['prefix'] }}">
                    <x-embla-images :images="$images" slideClasses="mx-1 p-1 bg-yellow-100">
                        <button class="embla__next-button absolute right-0 mr-2 top-45">
                            <x-icons.next size="24" fill='white' />
                        </button>
                    </x-embla-images>
                </div>
            </div>
        </div>
    @endforeach

</section>
