const initModal = () => {
    const modals = document.querySelectorAll("[data-modal]");
    modals.forEach((trigger) =>
        trigger.addEventListener("click", (e) => {
            if (!trigger.dataset.modal) return;
            e.preventDefault();
            const modal = document.getElementById(trigger.dataset.modal);
            document.body.classList.add("overflow-hidden");
            modal.classList.remove("hidden");
            modal.classList.add("block");

            const overlay = modal.querySelector("#bg-overlay");
            overlay.addEventListener("click", () => {
                document.body.classList.remove("overflow-hidden");
                modal.classList.add("hidden");
                modal.classList.remove("block");
            });
        })
    );
};

export default initModal;
