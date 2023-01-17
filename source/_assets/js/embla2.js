import EmblaCarousel from "embla-carousel";
import Autoplay from "embla-carousel-autoplay";

function addPrevNextBtnsClickHandlers(emblaApi, prevBtn, nextBtn) {
    const scrollPrev = () => emblaApi.scrollPrev();
    const scrollNext = () => emblaApi.scrollNext();
    prevBtn.addEventListener("click", scrollPrev, false);
    nextBtn.addEventListener("click", scrollNext, false);

    return () => {
        prevBtn.removeEventListener("click", scrollPrev, false);
        nextBtn.removeEventListener("click", scrollNext, false);
    };
}

function addTogglePrevNextBtnsActive(emblaApi, prevBtn, nextBtn) {
    const togglePrevNextBtnsState = () => {
        if (emblaApi.canScrollPrev()) prevBtn.removeAttribute("disabled");
        else prevBtn.setAttribute("disabled", "disabled");

        if (emblaApi.canScrollNext()) nextBtn.removeAttribute("disabled");
        else nextBtn.setAttribute("disabled", "disabled");
    };

    emblaApi
        .on("select", togglePrevNextBtnsState)
        .on("init", togglePrevNextBtnsState)
        .on("reInit", togglePrevNextBtnsState);

    return () => {
        prevBtn.removeAttribute("disabled");
        nextBtn.setAttribute("disabled", "disabled");
    };
}

function addDotBtnsAndClickHandlers(emblaApi, dotsNode) {
    let dotNodes = [];

    const addDotBtnsWithClickHandlers = () => {
        dotsNode.innerHTML = emblaApi
            .scrollSnapList()
            .map(
                () =>
                    '<button class="w-4 h-4 rounded-full bg-transparent border border-gray-500 embla__dot" type="button"></button>'
            )
            .join("");

        dotNodes = Array.from(dotsNode.querySelectorAll(".embla__dot"));
        dotNodes.forEach((dotNode, index) => {
            dotNode.addEventListener(
                "click",
                () => emblaApi.scrollTo(index),
                false
            );
        });
    };

    const toggleDotBtnsActive = () => {
        const previous = emblaApi.previousScrollSnap();
        const selected = emblaApi.selectedScrollSnap();
        dotNodes[previous].classList.remove("embla__dot-selected");
        dotNodes[selected].classList.add("embla__dot-selected");
    };

    emblaApi
        .on("init", addDotBtnsWithClickHandlers)
        .on("reInit", addDotBtnsWithClickHandlers)
        .on("init", toggleDotBtnsActive)
        .on("reInit", toggleDotBtnsActive)
        .on("select", toggleDotBtnsActive);

    return () => {
        dotsNode.innerHTML = "";
    };
}

function emblaTest(parentElementSelector, options) {
    const emblaNode = document.querySelector(parentElementSelector);
    if (!emblaNode) return;
    const viewPortNode = emblaNode.querySelector(".embla");
    const prevButton = emblaNode.querySelector(".embla__prev-button");
    const nextButton = emblaNode.querySelector(".embla__next-button");
    const dotsNode = emblaNode.querySelector(".embla-dots");

    const plugins = [];

    if (options?.autoPlay) {
        plugins.push(Autoplay());
    }

    const emblaApi = EmblaCarousel(viewPortNode, options, plugins);
    let removePrevNextButtonsClickHandler = null;
    let removeTogglePrevNextButtonsClickHandler = null;
    let removeDotsButtonAndClickHandler = null;

    if (!!prevButton && !!nextButton) {
        removePrevNextButtonsClickHandler = addPrevNextBtnsClickHandlers(
            emblaApi,
            prevButton,
            nextButton
        );
        removeTogglePrevNextButtonsClickHandler = addTogglePrevNextBtnsActive(
            emblaApi,
            prevButton,
            nextButton
        );
    }

    if (!!dotsNode) {
        removeDotsButtonAndClickHandler = addDotBtnsAndClickHandlers(
            emblaApi,
            dotsNode
        );
    }

    emblaApi
        .on("destroy", removePrevNextButtonsClickHandler)
        .on("destroy", removeTogglePrevNextButtonsClickHandler)
        .on("destroy", removeDotsButtonAndClickHandler);
}

export default emblaTest;
