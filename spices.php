<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spices</title>
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    <link rel="stylesheet" href="dal_style.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once 'navbar.php' ?>

    <section class="products" id="products">
        <h1 class="heading scroll-animation"> <span>Spices</span></h1>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="20" data-product-name="Mirchi Powder" data-product-price="320" data-product-image="images/mirchi.jpg">
                    <img src="images/mirchi.jpg" width="180px">
                    <h1>Mirchi Powder</h1>
                    <div class="price"> &#8377; 320</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="21" data-product-name="Haldi" data-product-price="380" data-product-image="images/haldi.jpg">
                    <img src="images/haldi.jpg">
                    <h1>Haldi</h1>
                    <div class="price"> &#8377; 380</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="22" data-product-name="Caramon" data-product-price="400" data-product-image="images/caramon.jpg">
                    <img src="images/caramon.jpg">
                    <h1>Caramon</h1>
                    <div class="price"> &#8377; 400</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="23" data-product-name="Clove" data-product-price="160" data-product-image="images/clove.webp">
                    <img src="images/clove.webp">
                    <h1>Clove</h1>
                    <div class="price"> &#8377; 160</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="24" data-product-name="Garam Masala" data-product-price="440" data-product-image="images/garam_masala.jpg">
                    <img src="images/garam_masala.jpg" width="180px">
                    <h1>Garam Masala</h1>
                    <div class="price"> &#8377; 440</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="25" data-product-name="Salt" data-product-price="28" data-product-image="images/salt.webp">
                    <img src="images/salt.webp" width="180px">
                    <h1>Salt</h1>
                    <div class="price"> &#8377; 28</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
            </div>
        </div>
    
        <br><br>
    
        <div class="popup" id="successPopup">
            <span class="close" onclick="closePopup()">&times;</span>
            <div class="popup-content">
                <span class="icon"><i class="fa-solid fa-circle-check"></i></span>
                <p>An item has been added to your basket successfully.</p>
            </div>
        </div>
    </section>

    <script src="addtocart.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>
