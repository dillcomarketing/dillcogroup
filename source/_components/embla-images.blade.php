<div class="{{ 'embla' . ($classes ? ' ' . $classes : '') }}">
    <div class="embla__container">
        @foreach ($images as $image)
            <div class="{{ 'embla__slide' . ($slideClasses ? ' ' . $slideClasses : '') }}">
                @if (($image['link'] ?? null))
                    <a href="{{ $image['link'] }}" title="{{ $image['title'] }}">
                        <img class="embla__slide__img" src="{{ $image['src'] }}" alt="{{ $image['title'] }}" title="{{ $image['title'] }}">
                    </a>
                @else
                    <img class="embla__slide__img" src="{{ $image }}" alt="{{ $image }}">
                @endif
            </div>
        @endforeach
    </div>

    {{ $slot }}
</div>
