<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bathroom Utilities</title>
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    <link rel="stylesheet" href="dal_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once 'navbar.php' ?>    

    <section class="products" id="products">
        <h1 class="heading scroll-animation"> <span>Bathroom Utilities</span></h1>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="38" data-product-name="Tooth Brush" data-product-price="25" data-product-image="images/brush.jpg">
                    <img src="images/brush.jpg" width="180px">
                    <h1>Tooth Brush</h1>
                    <div class="price"> &#8377; 25</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="39" data-product-name="Soap" data-product-price="25" data-product-image="images/soap.jpg">
                    <img src="images/soap.jpg">
                    <h1>Soap</h1>
                    <div class="price"> &#8377; 25</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="40" data-product-name="Handwash" data-product-price="62" data-product-image="images/handwash.jpg">
                    <img src="images/handwash.jpg">
                    <h1>Handwash</h1>
                    <div class="price"> &#8377; 62</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="41" data-product-name="Laundry Soap" data-product-price="20" data-product-image="images/clothes_soap.jpg">
                    <img src="images/clothes_soap.jpg">
                    <h1>Laundry Soap</h1>
                    <div class="price"> &#8377; 20</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="42" data-product-name="Shampoo" data-product-price="72" data-product-image="images/shampoo.webp">
                    <img src="images/shampoo.webp" width="180px">
                    <h1>Shampoo</h1>
                    <div class="price"> &#8377; 72</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="43" data-product-name="Washing Powder" data-product-price="840" data-product-image="images/washing_powder.jpg">
                    <img src="images/washing_powder.jpg" width="180px">
                    <h1>Washing Powder</h1>
                    <div class="price"> &#8377; 840</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
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
