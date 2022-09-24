<div class="{{ 'embla' . ($classes ? ' ' . $classes : '') }}">
    <div class="embla__container">
        @foreach ($images as $image)
            <div class="{{ 'embla__slide' . ($slideClasses ? ' ' . $slideClasses : '') }}">
                <img class="embla__slide__img" src="{{ $image }}" alt="{{ $image }}">
            </div>
        @endforeach
    </div>

    {{ $slot }}
</div>
