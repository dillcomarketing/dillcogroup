<div class="{{ 'embla' . ($classes ? ' ' . $classes : '') }}">
    <div class="embla__container">
        @foreach ($images as $image)
            <div class="embla__slide mx-1">
                <img src="{{ $image }}" alt="{{ $image }}">
            </div>
        @endforeach
    </div>

    {{ $slot }}
</div>
