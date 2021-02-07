let filterItemsSelector = "[js-product-filter]";
let filterItems = document.querySelectorAll(filterItemsSelector);

let sizeContainerSelector = '[js-watch-size]';
let colorContainerSelector = '[js-watch-color]';

let productImageSelector = '[js-product-image]';

let montre = {
    color: null,
    size: null,
}



filterItems.forEach(function (item) {
    item.addEventListener("click", function (e) {
        let attribute = this.dataset.attribute;
        let value = this.dataset.value;


        Array.prototype.slice.call(this.parentNode.children).forEach(function (child) {
            child.classList.remove("is-active");
        });
        this.classList.add("is-active");

        if (attribute === "pa_colors") {
            let name = this.dataset.name;
            montre = { ...montre, color: value };
            updateWatchColor(name)
            changeImage(value, ".watch__strap");
        }
        if (attribute === "taille-du-cadran") {
            montre = { ...montre, size: value }
            updateWatchSize(value);
        }


        let select = document.getElementById(attribute);
        select.value = value;

        jQuery(select).trigger("change.wc-variation-form");
    })
})


let changeImage = function (color) {
  
    let images = document.querySelectorAll(productImageSelector);
    images.forEach((image) => {
        let src = image.dataset.source;
        src = src.replace("{color}", color);
        image.src = src;
    })


}


let addToCartSelector = "[js-add-to-cart]";
let buttonAddToCart = document.querySelector(addToCartSelector);

buttonAddToCart.addEventListener("click", function(){
    document.querySelector(".variations_form").submit();
})
const updatePrice = () => {
    let selector = ".woocommerce-variation-price .woocommerce-Price-amount";
    let price = document.querySelector(selector).innerHTML;
    document.querySelector("[js-product-price]").innerHTML = price;
}

const updateWatchSize = (currentSize) => {
    let sizeContainer = document.querySelector(sizeContainerSelector);
    sizeContainer.innerHTML = currentSize;
}
const updateWatchColor = (currentColor) => {
    let colorContainer = document.querySelector(colorContainerSelector);
    colorContainer.innerHTML = currentColor;
}

jQuery(document).on("show_variation", function () {
    updatePrice();

})




