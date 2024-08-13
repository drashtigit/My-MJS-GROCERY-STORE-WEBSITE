<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery</title>
    <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
    

    <link rel="stylesheet" href="style.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<body>
   <?php include_once 'navbar.php'; ?>




<section class="home" id="home">
    <div class="content">
        <h3>Mohanlal Jethalal Shah</h3>
        <br>
        <pre>
          Now your favourite shop Mohanlal Jethalal Shah is online.
          Come and shop now at reasonable cost and high discounts.
               We provide best quality kirana. 
          Pickles are our speciality. You'll try it once and then crave 
          for it again.The raw mangoes used in these pickles are fresh 
          and the pickles are free of preservatives. So they are purely
             healthy and delicious. 
         We also provide the facility of home delievery. So surely give it a try.
              We assure you that you won't regret.
        </pre>
        <a href="Best Deals.php" class="btn" target= "_self">Click here to learn about today's best deals</a>
        
    </div>
</section>



<h2 class='sale-heading' >
    Independence Day <span>Sale</span> is Live For
</h2>



<div class="countdown-container">
    <div class="countdown-el">
        <span class="big-text" id="days">0</span> <br>
        <span>Days</span>
    </div>
    <div class="countdown-el">
        <span class="big-text" id="hours">0</span> <br>
        <span>Hours</span>
    </div>
    <div class="countdown-el">
        <span class="big-text" id="minutes">0</span> <br>
        <span>Minutes</span>
    </div>
    <div class="countdown-el">
        <span class="big-text" id="seconds">0</span> <br>
        <span>Seconds</span>
    </div>
</div>









<section id="category">

    
    <h1 class="heading scroll-animation">  <span>Category</span></h1>

    <div class="category-container">

        <a class="category-box" href = 'dal.php'>
            <img alt="Dal" src="images/all_pulses.jpeg">
            <span>Dal</span>
        </a>
        
        <a class="category-box" href = 'essentials.php'>
            <img alt="Pickles" src="images/all_aachar.jpeg">
            <span>Essentials</span>
        </a>
        
        <a class="category-box" href="spices.php">
            <img alt="Spices" src="images/all_spices.jpeg">
            <span>Spices</span>
        </a>
        
        <a class="category-box" href = 'dry_fruits.php'>
            <img alt="Dry Fruits" src="images/all_dryfruits.jpeg">
            <span>Dry Fruits</span>
        </a>
        
        <a class="category-box" href = 'grains.php'>
            <img alt="Grains" src="images/all_grains.jpeg">
            <span>Grains & Besan</span>
        </a>
        
        <a class="category-box" href = 'bathroom_utilites.php'>
            <img alt="Gardening Products" src="images/bathroom.webp">
            <span>Bathroom <br>Utilities</span>
        </a>
    </div>
    
</section>


















<section class="features" id="features">
    <h1 class="heading scroll-animation"> Our <span>Features</span></h1>
    <div class="box-container">

        <div class="box">
            <img src="images/free.png">
            <h1>Free home delivery</h1>
            <p class="content">Now come and save your money. We provide free home delivery within 2 days after the order has been placed.</p>
            <p class="hidden-content" style="display: none;">Enjoy the convenience of shopping from
                 home with our Kirana store's free delivery service in Amravati, saving you time 
                 and effort while ensuring your essentials reach your doorstep hassle-free.</p>
            <a href="#" class="btn scale-btn">Read more</a>
        </div>
        
        <div class="box">
            <img src="images/pickles.jpeg">
            <h1>Fresh pickles</h1>
            <p class="content">We provide fresh variety of pickles at reasonable cost.
                These pickles are free of any type of preservatives.</p>
            <p class="hidden-content" style="display: none;">Experience the tangy goodness of our fresh 
                mango, godkeri, and neembu pickles delivered straight to your doorstep in Amravati, 
                adding a burst of flavor to your meals.</p>
            <a href="#" class="btn scale-btn">Read more</a>
        </div>


        <div class="box">
            <img src="images/payment.jpeg">
            <h1>Easy payments</h1>
            <p class="content">You can easily pay us online using phone pe,net banking.
            </p>
            <p class="hidden-content" style="display: none;">Enjoy the simplicity of online 
                transactions when shopping with us - our MJS Kirana store in Amravati offers easy, 
                secure payment options, enhancing your shopping experience without leaving your home.</p>
            <a href="#" class="btn scale-btn">Read more</a>
        </div>
    </div>
</section>










<section class="products" id="products">
    <h1 class="heading scroll-animation"> Our <span>Products</span></h1>
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box" data-product-id="1" data-product-name="Gehu" data-product-price="38" data-product-image="images/gehu.png">
                <img src="images/gehu.png" width="180px">
                <h1>Gehu</h1>
                <div class="price"> &#8377; 38</div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                </div>
                <a href="#" class="btn addToCartBtn">Add to Cart</a>
            </div>

            <div class="swiper-slide box" data-product-id="2" data-product-name="Sugar" data-product-price="44" data-product-image="images/sugar.jpeg">
                <img src="images/sugar.jpeg">
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

            <div class="swiper-slide box" data-product-id="3" data-product-name="Moong Dal" data-product-price="120" data-product-image="images/moong.jpeg">
                <img src="images/moong.jpeg">
                <h1>Moong Dal</h1>
                <div class="price"> &#8377; 120</div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                </div>
                <a href="#" class="btn addToCartBtn">Add to Cart</a>
            </div>

            <div class="swiper-slide box" data-product-id="4" data-product-name="Moth" data-product-price="110" data-product-image="images/moth.jpeg">
                <img src="images/moth.jpeg">
                <h1>Moth</h1>
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

        </div>
    </div>
    <div class="swiper product-slider" >
        <div class="swiper-wrapper">
            <div class="swiper-slide box" data-product-id="5" data-product-name="Rice" data-product-price="84" data-product-image="images/rice.png">
                <img src="images/rice.png">
                <h1>Rice</h1>
                <div class="price"> &#8377; 84</div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                </div>
                <a href="#" class="btn addToCartBtn">Add to Cart</a>
            </div>

            <div class="swiper-slide box" data-product-id="6" data-product-name="Sauce" data-product-price="60" data-product-image="images/sauce.webp">
                <img src="images/sauce.webp" width="180px">
                <h1>Sauce</h1>
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

            <div class="swiper-slide box" data-product-id="7" data-product-name="Ghee" data-product-price="720" data-product-image="images/ghee.jpg">
                <img src="images/ghee.jpg" width="180px">
                <h1>Ghee</h1>
                <div class="price"> &#8377; 720</div>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                </div>
                <a href="#" class="btn addToCartBtn">Add to Cart</a>
            </div>

            <div class="swiper-slide box" data-product-id="8" data-product-name="Parachute Oil" data-product-price="218" data-product-image="images/parachute.jpg">
                <img src="images/parachute.jpg"  width="180px">
                <h1>Parachute Oil</h1>
                <div class="price"> &#8377; 218</div>
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

  

    <div class="popup" id="successPopup">
        <span class="close" onclick="closePopup()"></span>
        <div class="popup-content">
          <span class="icon"><i class="fa-solid fa-circle-check"></i></span>
          <p>An item has been added to your basket successfully.</p>
        </div>
      </div>









</section>

<section class="review" id="review" >
    <h1 class="heading scroll-animation">Customer's <span>Review</span></h1>
    <br>

    <div class="wrapper" id="testimonials">
        
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel" id="carousel">
          <li class="card">
            <div class="img">
              <img src="images/dummy5.jpeg" alt="img" draggable="false" />
            </div>
            <h2>HITESH SHARMA</h2>
            <span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut libero tempore molestiae vero et tempora, quia consequatur neque distinctio laboriosam amet quam sapiente incidunt officiis ipsum laborum, aperiam perferendis? Porro!</span>
          </li>

          <li class="card">
            <div class="img">
              <img src="images/dummy3.jpg" alt="img" draggable="false" />
            </div>
            <h2>RAKESH MAHETA</h2>
            <span class="text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sequi, natus temporibus ad totam vitae cumque nisi dolore harum molestiae consequuntur ipsum dolor magnam velit cum sed. Facilis, quasi eius?</span>
          </li>



          <li class="card">
            <div class="img">
              <img src="images/dummy4.jpeg" alt="img" draggable="false" />
            </div>
            <h2>MANISH SHAH</h2>
            <span class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, officia. Maiores provident quae reiciendis dicta cumque sint nulla non aut temporibus odio, quam tempore corrupti explicabo autem, excepturi, quidem blanditiis.</span>
          </li>



          <li class="card">
            <div class="img">
              <img src="images/dummy.jpeg" alt="img" draggable="false" />
            </div>
            <h2>VARSHA TEKADE</h2>
            <span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, modi ullam porro facere vel in illum voluptatibus expedita eligendi et nulla alias sint eaque pariatur inventore recusandae! Laudantium, ullam itaque.</span>
          </li>



          <li class="card">
            <div class="img">
              <img src="images/dummy2.jpg" alt="img" draggable="false" />
            </div>
            <h2>SUREKHA VARMA</h2>
            <span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cum minima explicabo repellat debitis delectus nostrum totam necessitatibus praesentium. Minus quis, tempora neque officia officiis dicta quos molestias voluptatum ipsa?</span>
          </li>
         
       </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
      <!-- <h3 class="small" style="text-align: center;">swipe left</h3>  -->


<br><br><br>









</section>

  

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h2>MJS<i class="fa-solid fa-basket-shopping"></i></h2>
            <p>Feel free to follow us on social media handlers.All the links are given below</p>
            <div class="share">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>

        <div class="box">
            <h2>Contact Info</h2>
           <a href="#" class="links"><i class="fa-solid fa-phone"></i> +91 9420188882</a>
           <a href="#" class="links"><i class="fa-solid fa-phone"></i> 2472740</a>
           <a href="#" class="links"><i class="fa-solid fa-envelope"></i> shahbhavesh139@gmail.com</a>
           <a href="https://www.google.com/maps?q=Outside+Ambagate,+Near+Ambadevi+Temple,+Amravati,+Maharashtra" class="links"><i class="fa-solid fa-location-dot"></i>Outside ambagate ,Near Ambadevi temple,Amravati ,Maharashtra</a>

        </div>

        <div class="box">
            <h2>Quick links</h2>
            <a href="#" class="links" id="home"><i class="fa-solid fa-arrow-right"></i>Home</a>
            <a href="#" class="links" id="features"><i class="fa-solid fa-arrow-right"></i>Features</a>
            <a href="#" class="links" id="products"><i class="fa-solid fa-arrow-right"></i>Products</a>
            <a href="#" class="links" id="review"><i class="fa-solid fa-arrow-right"></i>Review</a>
        </div>

        <div class="box">
            <h2>Newsletter</h2>
            <p>Subscribe for latest updates</p>
            <input type="email" placeholder="Your Email" class="email">
            <input type="button" value="Subscribe" class="btn">
        </div>

        
    </div>
</section>





    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <srcipt src="Best Deals JS.js"></script>

     
      



<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="addtocart.js"></script>




</body>
</html>



