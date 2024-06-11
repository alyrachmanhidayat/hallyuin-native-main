// Function to update total price
function updateTotalPrice() {
  let totalProduct = 0;
  let totalShipping = 0;
  let totalPrice = 0;
  document.getElementById('cart-card').querySelectorAll('.item').forEach(item => {
    const quantity = parseInt(item.querySelector('input[name="quantity"]').value, 10);
    const unitPrice = parseFloat(item.querySelector('.price').getAttribute('data-unit-price').replace('.', ''));

    if (quantity) {
      totalProduct += quantity * unitPrice;
    }
  });

  totalShipping = totalProduct * (10 / 100);

  totalPrice = totalProduct + totalShipping;

  document.getElementById('products-total').textContent = `IDR ${totalProduct.toLocaleString()}`;
  document.getElementById('total-shipping').textContent = `IDR ${totalShipping.toLocaleString()}`;
  document.getElementById('total-amount').textContent = `IDR ${totalPrice.toLocaleString()}`;
}

// Move to wishlist functionality
function moveToWishlist(button) {
  const itemRow = button.closest('.item');
  // Here you can add logic to move the item to the wishlist
  if (itemRow?.previousElementSibling && itemRow.previousElementSibling.tagName === 'HR') {
    itemRow.previousElementSibling.remove();
  } else if (itemRow?.nextElementSibling && itemRow.nextElementSibling.tagName === 'HR') {
    itemRow.nextElementSibling.remove();
  }
  itemRow.remove();

  const new_item_row = itemRow;

  const div_deskripsi = new_item_row.querySelector(".div-deskripsi");
  const div_quantity = new_item_row.querySelector(".div-quantity");

  div_deskripsi.querySelectorAll("button").forEach(x => {
    x.remove();
  })
  div_deskripsi.insertAdjacentHTML('beforeend', `<strong class="price">${div_quantity.querySelector('.price').getAttribute('data-unit-price')}</strong><br/>`);
  div_deskripsi.insertAdjacentHTML('beforeend', `<button onclick="moveToCart(this)" type="button" class="btn btn-add-to-cart"
  style="color: rgb(255, 255, 255); background-color: #7f4d8c;">Add to
  Cart</button>`);

  div_quantity.remove();

  const divider = '<hr class="my-4" />';
  const wishlist_card = document.getElementById('wishlist-card');
  if (wishlist_card.querySelectorAll(".item").length > 0) {
    wishlist_card.insertAdjacentHTML('beforeend', divider);
  }
  wishlist_card.appendChild(new_item_row);

  document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', (event) => {
      moveToCart(event.target);
    });
  });

  updateTotalPrice();
}

function moveToCart(button) {
  const itemRow = button.closest('.item');

  if (itemRow?.previousElementSibling && itemRow.previousElementSibling.tagName === 'HR') {
    itemRow.previousElementSibling.remove();
  } else if (itemRow?.nextElementSibling && itemRow.nextElementSibling.tagName === 'HR') {
    itemRow.nextElementSibling.remove();
  }
  itemRow.remove();

  const new_item_row = itemRow;

  const div_deskripsi = new_item_row.querySelector(".div-deskripsi");
  const price = div_deskripsi.querySelector(".price").textContent;

  div_deskripsi.querySelector(".price").remove();
  div_deskripsi.querySelector("br").remove();
  div_deskripsi.querySelector(".btn-add-to-cart").remove();

  const button_wishlist = `
  <button type="button" class="btn btn-detele"
      style="color: rgb(255, 255, 255); background-color: #fc0505;">Delete</button>
  <button type="button" class="btn btn-move-to-wishlist"
      style="color: rgb(255, 255, 255); background-color: #f2d541;">Add to
      Wishlist</button>
  `;

  const content_div_quantity = `
  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 div-quantity">
      <div class="d-flex mb-4" style="max-width: 300px">
          <button class="btn btn-primary px-3 me-2 decrement"
              style="background-color: #7D009E;">
              <i class="fas fa-minus"></i>
          </button>
          <input min="0" name="quantity" value="1" type="number"
              class="form-control quantity" />
          <button class="btn btn-primary px-3 ms-2 increment"
              style="background-color: #7D009E;">
              <i class="fas fa-plus"></i>
          </button>
      </div>
      <p class="text-start text-md-center price" data-unit-price="${price}">
          <strong>${price}</strong>
      </p>
  </div>
  `;

  div_deskripsi.insertAdjacentHTML('beforeend', button_wishlist);
  div_deskripsi.insertAdjacentHTML('afterend', content_div_quantity);

  const divider = '<hr class="my-4" />';
  const cart_card = document.getElementById('cart-card');
  if (cart_card.querySelectorAll(".item").length > 0) {
    cart_card.insertAdjacentHTML('beforeend', divider);
  }
  cart_card.appendChild(itemRow);

  document.querySelectorAll('.btn-detele').forEach(button => {
    button.addEventListener('click', (event) => {
      const itemRow = event.target.closest('.item');
      itemRow.remove();
      updateTotalPrice();
    });
  });

  document.querySelectorAll('.btn-move-to-wishlist').forEach(button => {
    button.addEventListener('click', (event) => {
      moveToWishlist(event.target);
    });
  });

  // Increment and decrement quantity functionality
  document.querySelectorAll('.increment').forEach(button => {
    button.addEventListener('click', (event) => {
      const quantityInput = event.target.closest('.d-flex').querySelector('.quantity');
      quantityInput.value = parseInt(quantityInput.value, 10) + 1;
      updateTotalPrice();
    });
  });

  document.querySelectorAll('.decrement').forEach(button => {
    button.addEventListener('click', (event) => {
      const quantityInput = event.target.closest('.d-flex').querySelector('.quantity');
      if (quantityInput.value > 0) {
        quantityInput.value = parseInt(quantityInput.value, 10) - 1;
        updateTotalPrice();
      }
    });
  });

  // Update total price on quantity change
  document.querySelectorAll('.quantity').forEach(input => {
    input.addEventListener('input', updateTotalPrice);
  });

  updateTotalPrice();
}

document.addEventListener('DOMContentLoaded', () => {


  // Delete button functionality
  document.querySelectorAll('.btn-detele').forEach(button => {
    button.addEventListener('click', (event) => {
      const itemRow = event.target.closest('.item');
      itemRow.remove();
      updateTotalPrice();
    });
  });

  document.querySelectorAll('.btn-move-to-wishlist').forEach(button => {
    button.addEventListener('click', (event) => {
      moveToWishlist(event.target);
    });
  });

  document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', (event) => {
      moveToCart(event.target);
    });
  });

  // Increment and decrement quantity functionality
  document.querySelectorAll('.increment').forEach(button => {
    button.addEventListener('click', (event) => {
      const quantityInput = event.target.closest('.d-flex').querySelector('.quantity');
      quantityInput.value = parseInt(quantityInput.value, 10) + 1;
      updateTotalPrice();
    });
  });

  document.querySelectorAll('.decrement').forEach(button => {
    button.addEventListener('click', (event) => {
      const quantityInput = event.target.closest('.d-flex').querySelector('.quantity');
      if (quantityInput.value > 0) {
        quantityInput.value = parseInt(quantityInput.value, 10) - 1;
        updateTotalPrice();
      }
    });
  });

  // Update total price on quantity change
  document.querySelectorAll('.quantity').forEach(input => {
    input.addEventListener('input', updateTotalPrice);
  });

  // Initialize total price on page load
  updateTotalPrice();

  // Show total price in modal when checkout button is clicked
  document.querySelector('[data-bs-target="#checkoutModal"]').addEventListener('click', () => {
    const totalAmount = document.getElementById('total-amount').textContent;
    document.getElementById('modal-total-price').textContent = totalAmount;
  });

  // Handle "Top up saldo" button click
  document.getElementById('top-up-button').addEventListener('click', () => {
    alert('Redirecting to top-up page...');
    // Add your top-up logic here
  });

  // Handle "Iya" button click in modal
  document.getElementById('confirm-checkout').addEventListener('click', () => {
    alert('Proceeding to checkout...');
    // Add your checkout logic here
  });
});
