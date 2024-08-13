document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.addToCartBtn');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            
            const productElement = button.closest('.swiper-slide');
            const productId = productElement.getAttribute('data-product-id');
            const productName = productElement.getAttribute('data-product-name');
            const productPrice = productElement.getAttribute('data-product-price');
            const productImage = productElement.getAttribute('data-product-image');
            
            const product = {
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage
            };
            
            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(product)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    
                    const popup = document.getElementById('successPopup');
                    popup.style.display = 'block';

                    setTimeout(function() {
                        popup.style.display = 'none';
                    }, 2000); 
                } else {
                    alert('Failed to add to cart');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});

function closePopup() {
    document.getElementById('successPopup').style.display = 'none';
}


















    document.addEventListener("DOMContentLoaded", function() {
     
        const cartCountElement = document.getElementById("cart-count");

        document.querySelectorAll(".addToCartBtn").forEach(button => {
            button.addEventListener("click", function() {
              
                let currentCount = parseInt(cartCountElement.textContent, 10);
                cartCountElement.textContent = currentCount + 1;

                
                const productId = this.getAttribute("data-product-id");
                
                fetch('add_to_cart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        'product_id': productId
                    })
                })
                .then(response => response.text())
                .then(data => {
                    
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });

