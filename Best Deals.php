<!DOCTYPE html>

<html>

    <head>

        <title>
            
            Best Deals

        </title>
        <link rel="icon" type="image/webp" href="mjs logo.webp" sizes="128x128">
        <link rel = 'stylesheet' href = 'Best Deals CSS.css'>
        <link rel="stylesheet" href="style.css">
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     

    </head>

    <body>
        
       
        <div class = "container">
    
            <div class = 'image-container'>
    
                <img src = 'images/Best Deals.png' alt = 'Best Deals Everyday' id = 'content1' class = 'active'>

                <img src = 'images/Best Deals.png' alt = 'Best Deals On Medicines' id = 'content2'>

                <img src = 'images/Best Deals On Fruits and Vegetables.png' alt = 'Best Deals On Fruits and Vegetables' id = 'content3'>

                <img src = 'images/Baby care products.jpg' alt = 'Best Deals on Baby Care Products' id = 'content4'>
                
            </div>

            <div class = 'dot-container'>

                <button onclick = "dot(1)"></button>

                <button onclick = "dot(2)"></button>

                <button onclick = "dot(3)"></button>

                <button onclick = "dot(4)"></button>

            </div>

            <button id = 'prev' onclick = "prev()"> &lt; </button>

            <button id = 'next' onclick = "next()"> &gt; </button>
    
        </div>

        <script src = 'Best Deals JS.js'></script>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</html>
