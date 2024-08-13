
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    <link rel="stylesheet" href="register.css"> 
    <link rel="stylesheet" href="style.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
</head>
<body>
    <?php include 'navbar.php' ?>
    <form id="register-form" action="register2.php" method="post" class="register-form">
        <h3>Register</h3>
        <input type="text" id="full_name" name="full_name" placeholder="Full Name" class="box" required>
        <div id="full_name_error" class="error"></div>
        <input type="email" id="email" name="email" placeholder="Email" class="box" required>
        <div id="email_error" class="error"></div>
        <input type="password" id="password" name="password" placeholder="Password" class="box" required>
        <input type="text" id="phone" name="phone" placeholder="Phone Number" class="box" required>
        <div id="phone_error" class="error"></div>
        <input type="submit" value="Register Now" class="btn">
    </form>


    <script>
    
    function validateFullName() {
        const fullName = document.getElementById('full_name').value;
        const namePattern = /^[A-Za-z\s]+$/;
        const fullNameError = document.getElementById('full_name_error');

        if (!namePattern.test(fullName)) {
            fullNameError.textContent = 'Full Name should not contain numbers.';
            fullNameError.classList.remove('d-none');
        } else {
            fullNameError.textContent = '';
            fullNameError.classList.add('d-none');
        }
    }

    function validateEmail() {
        const email = document.getElementById('email').value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const emailError = document.getElementById('email_error');

        if (!emailPattern.test(email)) {
            emailError.textContent = 'Please enter a valid email address.';
            emailError.classList.remove('d-none');
        } else {
            emailError.textContent = '';
            emailError.classList.add('d-none');
        }
    }

    function validatePhone() {
        const phone = document.getElementById('phone').value;
        const phonePattern = /^[0-9]{10}$/;
        const phoneError = document.getElementById('phone_error');

        if (!phonePattern.test(phone)) {
            phoneError.textContent = 'Phone number should be 10 digits long.';
            phoneError.classList.remove('d-none');
        } else {
            phoneError.textContent = '';
            phoneError.classList.add('d-none');
        }
    }

    document.getElementById('full_name').addEventListener('input', validateFullName);
    document.getElementById('email').addEventListener('input', validateEmail);
    document.getElementById('phone').addEventListener('input', validatePhone);

    document.getElementById('register-form').addEventListener('submit', function(event) {
       
        validateFullName();
        validateEmail();
        validatePhone();

        const errors = document.querySelectorAll('.error');
        let hasError = false;
        errors.forEach(error => {
            if (error.textContent !== '') {
                hasError = true;
            }
        });

        if (hasError) {
            event.preventDefault(); 
        }
    });
</script>



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="dal.js"></script>


</body>
</html>
