import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';

function initEmbla(parentElementSelector, options) {
    const start = options?.startIndex ?? 1;
    const parent = document.querySelector(parentElementSelector);

    if (!parent) {
        return;
    }

    const slideElements = parent.querySelectorAll('.embla__slide');
    const dotButtons = parent.querySelectorAll('.embla__dot-button');

    const prevButton = parent.querySelector('.embla__prev-button');
    const nextButton = parent.querySelector('.embla__next-button');

    slideElements[start]?.classList.add('embla__slide--active');
    dotButtons[start]?.classList.add('embla__dot-button--active');

    const plugins = [];

    if (options?.autoPlay) {
        plugins.push(Autoplay({ delay: 3000 }, parent));
    }

    const embla = EmblaCarousel(parent, {
        startIndex: start,
        loop: options?.loop ?? false
    }, plugins);

    embla.on('select', () => {
        let current = embla.selectedScrollSnap();
        let previous = embla.previousScrollSnap();

        slideElements[current]?.classList.add('embla__slide--active');
        slideElements[previous]?.classList.remove('embla__slide--active');

        dotButtons[current]?.classList.add('embla__dot-button--active');
        dotButtons[previous]?.classList.remove('embla__dot-button--active');

        embla.reInit();
    });

    // handle next/prev button
    prevButton?.addEventListener('click', embla.scrollPrev);
    nextButton?.addEventListener('click', embla.scrollNext);

    // handle embla dots click
    dotButtons.forEach((e, i) => {
        e.addEventListener('click', () => embla.scrollTo(i));
    });
}

export default initEmbla;
