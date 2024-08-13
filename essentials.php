<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essential Utilities</title>
    <link rel="stylesheet" href="dal_style.css">
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once 'navbar.php' ?>   

    <section class="products" id="products">
        <h1 class="heading scroll-animation"> <span>Essentials</span></h1>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="14" data-product-name="Oil" data-product-price="110" data-product-image="images/oil.avif">
                    <img src="images/oil.avif" width="180px">
                    <h1>Oil</h1>
                    <div class="price"> &#8377; 110</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="15" data-product-name="Sugar" data-product-price="44" data-product-image="images/sugar.jpg">
                    <img src="images/sugar.jpg">
                    <h1>Sugar</h1>
                    <div class="price"> &#8377; 44</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="16" data-product-name="Coffee" data-product-price="10" data-product-image="images/coffee.webp">
                    <img src="images/coffee.webp">
                    <h1>Coffee</h1>
                    <div class="price"> &#8377; 10</div>
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
                <div class="swiper-slide box" data-product-id="17" data-product-name="Jaggery" data-product-price="60" data-product-image="images/jaggery.jpg">
                    <img src="images/jaggery.jpg">
                    <h1>Jaggery</h1>
                    <div class="price"> &#8377; 60</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <a href="#" class="btn addToCartBtn">Add to Cart</a>
                </div>
    
                <div class="swiper-slide box" data-product-id="18" data-product-name="Chai Patti" data-product-price="320" data-product-image="images/chaipatti.webp">
                    <img src="images/chaipatti.webp" width="180px">
                    <h1>Chai Patti</h1>
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
    
                <div class="swiper-slide box" data-product-id="19" data-product-name="Chocolates" data-product-price="10" data-product-image="images/chocolates.webp">
                    <img src="images/chocolates.webp" width="180px">
                    <h1>Chocolates</h1>
                    <div class="price"> &#8377; 10</div>
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
