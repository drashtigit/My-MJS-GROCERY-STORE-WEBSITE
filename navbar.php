<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> -->

<?php
session_start();
include 'DB-connection.php'; 

function getCartItemCount($userId) {
    global $conn; 
    $sql = "SELECT COUNT(*) as count FROM cart_items WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['count'];
}

$cartCount = isset($_SESSION['user_id']) ? getCartItemCount($_SESSION['user_id']) : 0;


?>

<header class="header">
    <a href="index.php" class="logo"><i class="fa-solid fa-basket-shopping"></i>  MJS</a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#features">Features</a>
        <a href="#products">Products</a>
        <a href="#review">Review</a>
    </nav>
    <div class="icons">
         <div id="menu-btn"><i class="fa-solid fa-bars"></i></div>
        <div id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></div>

       
        <div id="cart-btn" class="cart-icon">
            <i class="fa-solid fa-cart-shopping"></i>
            <span id="cart-count" class="cart-count"><?php echo $cartCount; ?></span>
        </div>



        <div id="login-btn"><i class="fa-solid fa-user"></i></div> 
    </div>



    <div class="search-form">
        <input type="search" placeholder="Search here......" id="search-box">  
        <label for="search-box" id="voice-search"><i class="fa-solid fa-microphone"></i></label>
    </div>
    <ul id="recommendation-list" class="recommendation-list"></ul>




    <?php
    if (isset($_SESSION['user_id'])) {
       
        echo '<form action="logout.php" method="post" class="login-form">
                <h3>Welcome, ' . htmlspecialchars($_SESSION['full_name']) . '</h3>
                <input type="submit" value="Logout" class="btn">
              </form>';
    } else {
       
        $loginError = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';
        echo '<form action="login.php" method="post" class="login-form">
                <h3>Login form</h3>';

                if (!empty($loginError)) {
                    echo '<div class="alert alert-danger" role="alert" style="font-size: 1.5rem; color: red;">' 
                            . htmlspecialchars($loginError) . 
                         '</div>';
                    $_SESSION['login_error'] = ''; 
                }

        echo '<input type="email" name="email" placeholder="your email" class="box" required>
              <input type="password" name="password" placeholder="your password" class="box" required>
              <p>Don\'t have an account <a href="register.php">Create Now</a></p>
              <input type="submit" value="Login Now" class="btn">
              </form>';
    }
    ?>








<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     const cartBtn = document.getElementById("cart-btn");

    //     cartBtn.addEventListener("click", function() {
    //         window.location.href = "display-cart.html";
    //     });

    // });









    document.addEventListener("DOMContentLoaded", function() {
        const cartBtn = document.getElementById("cart-btn");

        cartBtn.addEventListener("click", function() {
            <?php if (!isset($_SESSION['user_id'])): ?>
                alert('Please log in to add items to cart.');
                window.location.href = 'index.php'; 
            <?php else: ?>
                window.location.href = "display-cart.html"; 
            <?php endif; ?>
        });
    });
</script>





    


</header>