document.addEventListener('DOMContentLoaded', function() {
    var decreaseButton = document.querySelector('.product-count .qtyminus');
    var increaseButton = document.querySelector('.product-count .qtyplus');
    var quantityInput = document.querySelector('.product-count .qty');

    decreaseButton.addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 0) {
            quantityInput.value = currentValue - 1;
        }
    });

    increaseButton.addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    quantityInput.addEventListener('change', function() {
        var currentValue = parseInt(quantityInput.value);
        if (isNaN(currentValue) || currentValue < 0) {
            quantityInput.value = 0;
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var wishlistButton = document.querySelector('.wishlist-button');

    wishlistButton.addEventListener('click', function() {
        alert('Product added to wishlist!');
    });
});

