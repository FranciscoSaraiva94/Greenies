
document.addEventListener("DOMContentLoaded", () => {

    function recalculateTotal() {
        let total = 0;
        let subtotals = document.querySelectorAll(".subtotal");
        subtotals.forEach(subtotal => {
            total = total + parseInt(subtotal.textContent);
        })
        document.querySelector(".total").textContent = total;
    }

    const removeBtns = document.querySelectorAll(".remove");

    function recalculateSubtotals(element) {
        const tr = element.parentNode.parentNode;
        const price = tr.dataset.price;
        const quantity = element.value;
        tr.querySelector(".subtotal").textContent = price * quantity;
        recalculateTotal();
    }

    removeBtns.forEach(button => {
        button.addEventListener("click", () => {
            const currentProduct = button.parentNode.parentNode;
            const product_id = currentProduct.dataset.product_id;

            fetch("http://localhost/Greenies/requests", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "request=removeProduct&product_id=" + product_id
            })
                .then(response => response.json())
                .then(parsedResponse => {
                    console.log(parsedResponse.status)
                    if (parsedResponse.status == "OK") {
                        currentProduct.remove();
                        recalculateTotal();
                    }
                });
        });
    }
    )

    const currentQuantity = document.querySelectorAll(".quantity");

    currentQuantity.forEach(element => {
        element.addEventListener("change", () => {
            const item = element.parentNode.parentNode;
            const product_id = item.dataset.product_id;
            const quantity = element.value;

            fetch("http://localhost/Greenies/requests", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "request=changeQuantity&product_id=" + product_id + "&quantity=" + quantity
            })
                .then(response => response.json())
                .then(parsedResponse => {
                    if (parsedResponse.status == "OK") {
                        recalculateSubtotals(element);
                    }
                });
        })
    })

});