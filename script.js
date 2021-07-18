
document.addEventListener("DOMContentLoaded", () => {
    let addButtons = document.querySelectorAll(".cartButtonAdd");
    let values = document.querySelectorAll(".value");

    addButtons.forEach(element => {
        element.addEventListener("click", () => {
            for (let value of values) {
                setTimeout(function () { value.value = 1 }, 1);
            }
        });
    });
});
