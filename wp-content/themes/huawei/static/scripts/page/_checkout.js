let checkboxContainer = document.querySelector('#ship-to-different-address .woocommerce-form__label');
let checkbox = document.getElementById('ship-to-different-address-checkbox');
let shippingForm = document.querySelector('[js-shipping-form] .shipping_address');

console.log(checkboxContainer)


checkboxContainer.addEventListener('click', () => {

    if (checkbox.checked) {
        shippingForm.classList.remove('is-hidden')
    } else {
        shippingForm.classList.add('is-hidden')
    }
})

