<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grains & Besan</title>
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    <link rel="stylesheet" href="dal_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once 'navbar.php' ?>   

    <section class="products" id="products">
        <h1 class="heading scroll-animation"> <span>Grains & Besan</span></h1>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="32" data-product-name="Rice" data-product-price="40" data-product-image="images/rice.jpg">
                    <img src="images/rice.jpg" width="180px">
                    <h1>Rice</h1>
                    <div class="price"> &#8377; 40</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="33" data-product-name="Gehu" data-product-price="40" data-product-image="images/gehu.jpg">
                    <img src="images/gehu.jpg">
                    <h1>Gehu</h1>
                    <div class="price"> &#8377; 40</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="34" data-product-name="Besan" data-product-price="100" data-product-image="images/besan.jpg">
                    <img src="images/besan.jpg">
                    <h1>Besan</h1>
                    <div class="price"> &#8377; 100</div>
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
                <div class="swiper-slide box" data-product-id="35" data-product-name="Oats" data-product-price="95" data-product-image="images/oats.jpg">
                    <img src="images/oats.jpg">
                    <h1>Oats</h1>
                    <div class="price"> &#8377; 95</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="36" data-product-name="Bajra" data-product-price="40" data-product-image="images/bajra.jpg">
                    <img src="images/bajra.jpg" width="180px">
                    <h1>Bajra</h1>
                    <div class="price"> &#8377; 40</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="37" data-product-name="Rajma" data-product-price="170" data-product-image="images/beans.webp">
                    <img src="images/beans.webp" width="180px">
                    <h1>Rajma</h1>
                    <div class="price"> &#8377; 170</div>
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
