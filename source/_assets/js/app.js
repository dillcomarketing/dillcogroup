import toggleBurger from "./burger";
import emblaInit from "./embla";
import AOS from "aos";
import initModal from "./modal";
import "aos/dist/aos.css";

AOS.init();
initModal();

toggleBurger("#burger-button", "#header-menu");

emblaInit("#homepage-banner-slider", {
    loop: true,
    autoPlay: true,
});
emblaInit("#homepage-brand-slider", {
    loop: false,
    containScroll: "trimSnaps",
    align: "center",
    slidesToScroll: "auto",
});
emblaInit("#dilltea-best-seller", {
    loop: true,
    autoPlay: true,
});
emblaInit("#test-lineups", {
    loop: true,
    containScroll: "trimSnaps",
    align: "center",
    slidesToScroll: "auto",
    autoPlay: true,
});
emblaInit("#premium-beverages-powder", {
    loop: true,
    containScroll: "trimSnaps",
    align: "center",
    slidesToScroll: "auto",
    autoPlay: true,
});

emblaInit("#best-seller-slider", {
    containScroll: "trimSnaps",
    align: "center",
    slidesToScroll: "auto",
});
