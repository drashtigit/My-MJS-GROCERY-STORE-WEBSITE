<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dal</title>
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    <link rel="stylesheet" href="dal_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once 'navbar.php' ?>

    <section class="products" id="products">
        <h1 class="heading scroll-animation"> <span>Dal</span></h1>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box" data-product-id="9" data-product-name="Masoor Dal" data-product-price="110" data-product-image="images/masoor_dal.webp">
                    <img src="images/masoor_dal.webp" width="180px">
                    <h1>Masoor Dal</h1>
                    <div class="price"> &#8377; 110</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="3" data-product-name="Moong Dal" data-product-price="120" data-product-image="images/moong.jpeg">
                    <img src="images/moong_dal.jpg">
                    <h1>Moong Dal</h1>
                    <div class="price"> &#8377; 120</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="10" data-product-name="Toor Dal" data-product-price="195" data-product-image="images/toor_dal.jpg">
                    <img src="images/toor_dal.jpg">
                    <h1>Toor Dal</h1>
                    <div class="price"> &#8377; 195</div>
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
                <div class="swiper-slide box" data-product-id="11" data-product-name="Urad Dal" data-product-price="155" data-product-image="images/urad_dal.jpg">
                    <img src="images/urad_dal.jpg">
                    <h1>Urad Dal</h1>
                    <div class="price"> &#8377; 155</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="12" data-product-name="Laal Chana" data-product-price="80" data-product-image="images/laal_chana.webp">
                    <img src="images/laal_chana.webp" width="180px">
                    <h1>Laal Chana</h1>
                    <div class="price"> &#8377; 80</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                    </div>
                    <button class="btn addToCartBtn">Add to Cart</button>
                </div>

                <div class="swiper-slide box" data-product-id="13" data-product-name="Beans (Lal Rajma)" data-product-price="170" data-product-image="images/beans.webp">
                    <img src="images/beans.webp" width="180px">
                    <h1>Beans (Lal Rajma)</h1>
                    <div class="price"> &#8377; 170</div>
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
