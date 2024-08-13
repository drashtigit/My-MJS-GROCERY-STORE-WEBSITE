document.addEventListener('DOMContentLoaded', function() {
    const totalAmountElement = document.getElementById('total-amount2');
    const paymentMethodElement = document.getElementById('payment-method');
    const cardDetailsElement = document.getElementById('card-details');
    const payNowButton = document.getElementById('payNowBtn');
    const paymentContainer = document.querySelector('.payment-container');

    const urlParams = new URLSearchParams(window.location.search);
    const totalAmount = urlParams.get('total');

    
    if (totalAmount) {
        totalAmountElement.textContent = parseFloat(totalAmount).toFixed(2);
    } else {
        totalAmountElement.textContent = '0.00'; 
    }

    paymentMethodElement.addEventListener('change', function() {
        if (this.value === 'online') {
            cardDetailsElement.style.display = 'block';
            paymentContainer.scrollTop = 0; 
        } else {
            cardDetailsElement.style.display = 'none';
        }
    });

    payNowButton.addEventListener('click', function(event) {
        event.preventDefault();
        
        const userName = document.getElementById('user-name').value;
        const locationAddress = document.getElementById('location-address').value;
        const paymentMethod = paymentMethodElement.value;

        if (userName && locationAddress && paymentMethod) {
            if (paymentMethod === 'online') {
                const cardNumber = document.getElementById('card-number').value;
                const expiryDate = document.getElementById('expiry-date').value;
                const cvv = document.getElementById('cvv').value;

                if (validateCardNumber(cardNumber) && validateExpiryDate(expiryDate) && validateCVV(cvv)) {
                    alert('Payment successful!');
                    window.location.href = 'payment2.html';
                } else {
                    alert('Please enter valid card details.');
                }
            } else {
                alert('Order placed successfully! Pay with cash upon delivery.');
                window.location.href = 'payment2.html';
            }
        } else {
            alert('Please fill in all required fields.');
        }
    });

    function validateCardNumber(number) {
        return /^[0-9]{16}$/.test(number.replace(/\s+/g, ''));
    }

    function validateExpiryDate(date) {
        return /^(0[1-9]|1[0-2])\/?([0-9]{2})$/.test(date);
    }

    function validateCVV(cvv) {
        return /^[0-9]{3,4}$/.test(cvv);
    }
});
