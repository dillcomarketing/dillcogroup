import initEmbla from "./embla";
import toggleBurger from "./burger";
import emblaTest from "./embla2";
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();

initEmbla("#product-banner-slider .embla", {
    autoPlay: true,
    loop: true,
    startIndex: 0,
});
initEmbla("#product-lineup-slider .embla", { loop: true, startIndex: 1 });
toggleBurger("#burger-button", "#header-menu");
emblaTest("#homepage-banner-slider", {
    loop: true,
    autoPlay: true,
});
emblaTest("#homepage-brand-slider", {
    loop: false,
    containScroll: "trimSnaps",
    align: "center",
    slidesToScroll: "auto",
});
emblaTest("#dilltea-best-seller", {
    loop: true,
    autoPlay: true,
});
emblaTest("#test-lineups", {
    loop: true,
    containScroll: "trimSnaps",
    align: "center",
    slidesToScroll: "auto",
    autoPlay: true,
});
emblaTest("#premium-beverages-powder", {
    loop: true,
    containScroll: "trimSnaps",
    align: "center",
    slidesToScroll: "auto",
    autoPlay: true,
});
