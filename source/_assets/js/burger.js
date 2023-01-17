const toggleBurger = (buttonSelector, menuSelector) => {
    const burgerComponent = document.querySelector(buttonSelector);
    const menuComponent = document.querySelector(menuSelector);

    if (!burgerComponent || !menuComponent) return;

    burgerComponent.addEventListener("click", () => {
        menuComponent.classList.toggle("hidden");
    });
};

export default toggleBurger;
