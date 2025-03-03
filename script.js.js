document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".card");
    cards.forEach(card => {
        card.addEventListener("mouseover", () => {
            card.style.backgroundColor = "#d4edda";
        });
        card.addEventListener("mouseout", () => {
            card.style.backgroundColor = "white";
        });
    });
});
