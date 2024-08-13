<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dry Fruits</title>
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    <link rel="stylesheet" href="dal_style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once 'navbar.php' ?>   

    <section class="products" id="products">
        <h1 class="heading scroll-animation"> <span>Dry fruits</span></h1>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="26" data-product-name="Kaju" data-product-price="940" data-product-image="images/kaju.jpg">
                    <img src="images/kaju.jpg" width="180px">
                    <h1>Kaju</h1>
                    <div class="price"> &#8377; 940</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="27" data-product-name="Anjeer" data-product-price="1400" data-product-image="images/anjeer.webp">
                    <img src="images/anjeer.webp">
                    <h1>Anjeer</h1>
                    <div class="price"> &#8377; 1400</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="28" data-product-name="Badam" data-product-price="800" data-product-image="images/badam.webp">
                    <img src="images/badam.webp">
                    <h1>Badam</h1>
                    <div class="price"> &#8377; 800</div>
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
                <div class="swiper-slide box" data-product-id="29" data-product-name="Kishmish" data-product-price="300" data-product-image="images/kishmish.jpg">
                    <img src="images/kishmish.jpg">
                    <h1>Kishmish</h1>
                    <div class="price"> &#8377; 300</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="30" data-product-name="Roasted Pista" data-product-price="1200" data-product-image="images/pista.jpg">
                    <img src="images/pista.jpg" width="180px">
                    <h1>Roasted Pista</h1>
                    <div class="price"> &#8377; 1200</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="31" data-product-name="Akhrot Giri" data-product-price="1200" data-product-image="images/brain.jpg">
                    <img src="images/brain.jpg" width="180px">
                    <h1>Akhrot Giri</h1>
                    <div class="price"> &#8377; 1200</div>
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
