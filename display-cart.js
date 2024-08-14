document.addEventListener("DOMContentLoaded", function() {
    fetchCartItems();

    function fetchCartItems() {
        fetch('fetch-cart-items.php')
            .then(response => response.json())
            .then(data => displayCartItems(data));
    }

function displayCartItems(cartItems) {
const cartItemsContainer = document.getElementById('cart-items');
cartItemsContainer.innerHTML = '';

let totalPrice = 0;

cartItems.forEach(item => {
totalPrice += item.product_price * item.quantity;

const cartItemDiv = document.createElement('div');
cartItemDiv.className = 'cart-item';
cartItemDiv.innerHTML = `
    <img src="${item.product_image}" alt="${item.product_name}">
    <div>${item.product_name}</div>
    <div>₹${item.product_price}</div>
    <div class="quantity-controls">
        <button onclick="updateQuantity(${item.product_id}, 'decrease')">-</button>
        <div>${item.quantity}</div>
        <button onclick="updateQuantity(${item.product_id}, 'increase')">+</button>
    </div>
    <button class="delete-btn" onclick="deleteItem(${item.product_id})"><i class="fa-solid fa-trash"></i></button>
`;
cartItemsContainer.appendChild(cartItemDiv);
});

document.getElementById('total-amount-value').innerText = totalPrice.toFixed(2);
}


    window.updateQuantity = function(productId, action) {
        fetch('update-cart-item.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ productId, action })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                fetchCartItems();
            } else {
                alert(data.message);
            }
        });
    };

    window.deleteItem = function(productId) {
        fetch('delete-cart-item.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                fetchCartItems();
            } else {
                alert(data.message);
            }
        });
    };

    document.getElementById('pay-now-btn').addEventListener('click', function() {
        const totalAmount = document.getElementById('total-amount-value').textContent;
        const encodedTotalAmount = encodeURIComponent(totalAmount);
        window.location.href = `payment2.html?total=${encodedTotalAmount}`;
    });

});