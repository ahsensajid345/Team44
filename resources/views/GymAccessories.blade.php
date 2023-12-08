<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Womens Gym Clothes - Gains</title>
<link rel="stylesheet" href="styles.css">
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }
    .container {
        width: 80%;
        margin: auto;
        flex: 1;
    }
    header {
        background: #333;
        color: white;
        padding: 1em 0;
        text-align: center;
    }
    .product-box {
        background: #f9f9f9;
        border: 1px solid #ddd;
        margin-bottom: 2em;
        padding: 1em;
        text-align: center;
    }
    .product-box img {
        max-width: 100%;
        height: auto;
        margin-bottom: 1em;
    }
    .product h3 {
        margin-top: 0.5em;
    }
    .product p {
        color: #555;
        margin-bottom: 1em;
    }
    .product .price {
        color: #e8491d;
        font-size: 1.2em;
        margin-bottom: 1em;
    }
    .product .buy-now {
        background-color: #e8491d;
        color: white;
        text-decoration: none;
        padding: 0.5em 1em;
        display: inline-block;
    }
    footer {
        background: #333;
        color: white;
        text-align: center;
        padding: 1em 0;
        width: 100%;
    }
</style>
</head>
<body>
    
    @include('Navigation')

    <div class="container">
        <header>
            <h1>Gym Accessories</h1>
        </header>

        <section class="product-list">
            <div class="product-box">
                <h3>APEX ATHLETE SERIES - GPS PERFORMANCE TRACKER + ACADEMY ACCESS</h3>
                <img src="GA1.jpg">
                <p class="price">£199.99</p>
                <p>The Apex Athlete Series App pairs with the GPS Performance Tracker allowing you to track 16 key metrics that help you improve your game. The most popular of which are Total Distance, Max Speed, Sprints and Heat Maps.</p>
                <a href="#" class="buy-now">Buy Now</a>
            </div>

            <div class="product-box">
                <h3>Myprotein Shaker Bottle</h3>
                <img src="GA2.jpg">
                <p class="price">£3.00</p>
                <p>Our shaker helps to keep you hydrated throughout the day, and the blending ball has been designed to give you a smooth shake whatever supplement you’re mixing. It’s an essential for your gym bag to stay fuelled, wherever you are.</p>
                <a href="#" class="buy-now">Buy Now</a>
            </div>

            <div class="product-box">
                <h3>Resistance Bands</h3>
                <img src="GA3.jpg">
                <p class="price">£2.99</p>
                <p>Elevate your fitness with out premium resistance bands, crafted from 100% natural latex for quality and eco-friendliness. Portable and versatile, these bands enable on-the-go workouts for comprehensive strength training, perfect for various activities. Enhance your fitness routine with intensity and flexibility, wherever you go.</p>
                <a href="#" class="buy-now">Buy Now</a>
            </div>

            <div class="product-box">
                <h3>RDX Gym Weight Lifting Gloves</h3>
                <img src="GA4.jpg">
                <p class="price">£8.99</p>
                <p>The RDX gym gloves are made with supple spandex fabric, ensuring they stay durable and tough while providing optimal stretchability during intense workouts. The weightlifting gloves boost your confidence to enable you to perform actively in bodybuilding, weightlifting, powerlifting, calisthenics, and other home and gym workouts.</p>
                <a href="#" class="buy-now">Buy Now</a>
            </div>

            <div class="product-box">
                <h3>Black Gym Bag</h3>
                <img src="GA5.jpg">
                <p class="price">£36.00</p>
                <p>Waterproof duffel with a spacious main compartment, ventilated side pocket, and extra zip compartments. This robust yet lightweight bag is designed for everyday use, featuring a special water-repellent coating for all-weather durability. Effortlessly carry your essentials with adjustable shoulder straps and convenient handles. Stay organized and stylish with this versatile sports bag.</p>
                <a href="#" class="buy-now">Buy Now</a>
            </div>
        </section>
    </div>

    <footer>
        <p>Gains &copy; 2023</p>
    </footer>
</body>
</html>
