document.querySelectorAll(".filter-btn").forEach(button => {
    button.addEventListener("click", () => {
        button.classList.toggle("active"); // Highlight selected filters
        updateFilters();
    });
});

function updateFilters() {
    let activeFilters = [];
    document.querySelectorAll(".filter-btn.active").forEach(activeBtn => {
        activeFilters.push(activeBtn.dataset.filter);
    });

}