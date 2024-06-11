document.addEventListener('DOMContentLoaded', () => {
    // Function to update total price
    function updateTotalPrice() {
      let totalPrice = 0;
      document.querySelectorAll('.item').forEach(item => {
        const quantity = parseInt(item.querySelector('.quantity').value, 10);
        const unitPrice = parseFloat(item.querySelector('.price').getAttribute('data-unit-price').replace('.', ''));
        totalPrice += quantity * unitPrice;
      });
      document.getElementById('products-total').textContent = `IDR ${totalPrice.toLocaleString()}`;
      document.getElementById('total-amount').textContent = `IDR ${totalPrice.toLocaleString()}`;
    }
  
    // Delete button functionality
    document.querySelectorAll('.btn-detele').forEach(button => {
      button.addEventListener('click', (event) => {
        const itemRow = event.target.closest('.item');
        itemRow.remove();
        updateTotalPrice();
      });
    });
  
    // Move to wishlist functionality
    function moveToWishlist(button) {
      const itemRow = button.closest('.item');
      // Here you can add logic to move the item to the wishlist
      itemRow.remove();
      updateTotalPrice();
    }
  
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
  