<!-- Hero Section -->
<section class="home" id="home">
    <div class="row">
        <div class="content">
            <h3>fresh coffee in the morning</h3>
            <a href="#menu" class="btn">Buy One Now</a>
        </div>

        <div class="image">
            <img src="<?= $base_url ?>assets/image/home-img-1.png" class="main-home-image" alt="">
        </div>
    </div>

    <div class="image-slider">
        <img src="<?= $base_url ?>assets/image/home-img-1.png" alt="">
        <img src="<?= $base_url ?>assets/image/home-img-2.png" alt="">
        <img src="<?= $base_url ?>assets/image/home-img-3.png" alt="">
    </div>
</section>

<!-- ABOUT -->
<section class="about" id="about">
    <h1 class="heading">about us <span>why choose us</span></h1>

    <div class="row">
        <div class="image">
            <img src="<?= $base_url ?>assets/image/about-img.png" alt="">
        </div>

        <div class="content">
            <h3 class="title">What's Make Our Coffee Special!</h3>
            <p>We are passionate about coffee and believe that every cup tells a story. We are dedicated to providing an exceptional coffee experience to our customers. Our love for coffee has led us on a voyage of exploration and discovery, as we travel the world in search of the finest coffee beans, carefully roasted and brewed to perfection.</p>
            <p>But coffee is not just a drink, it's an experience. Our warm and inviting atmosphere is designed to be a haven for coffee lovers, where they can relax, connect, and embark on their own coffee voyages.</p>
            <a href="#" class="btn">Read More</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="<?= $base_url ?>assets/image/about-icon-1.png" alt="">
                    <h3>Quality Coffee</h3>
                </div>
                <div class="icons">
                    <img src="<?= $base_url ?>assets/image/about-icon-2.png" alt="">
                    <h3>Our Branches</h3>
                </div>
                <div class="icons">
                    <img src="<?= $base_url ?>assets/image/about-icon-3.png" alt="">
                    <h3>Free Delivery</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SHOP SECTION  -->
<section class="menu" id="menu">
    <h1 class="heading">our menu <span>popular menu</span></h1>

    <!-- CONTENT  -->
    <div class="shop-content">
        <!-- BOX 1 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee1-Cafecito-de-Olla.png" alt="" class="product-img">
            <h2 class="product-title">Cafecito de Olla</h2>
            <span class="product-price">₱239</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
        <!-- BOX 2 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee2-Cinnamon-Coffee-Smoothie.png" alt="" class="product-img">
            <h2 class="product-title">Cinnamon Coffee Smoothie</h2>
            <span class="product-price">₱269.00</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
        <!-- BOX 3 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee3-Creamy-Gourmet-Hot-Chocolate.png" alt="" class="product-img">
            <h2 class="product-title">Creamy Gourmet Hot Chocolate</h2>
            <span class="product-price">₱219.00</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
        <!-- BOX 4 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee7-Iced-White-Mocha-with-Caramel-and-Salted-Cold-Foam.png" alt="" class="product-img">
            <h2 class="product-title">Iced White Mocha with Caramel</h2>
            <span class="product-price">₱299.00</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
        <!-- BOX 5 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee5-Frozen-Irish-Coffee.png" alt="" class="product-img">
            <h2 class="product-title">Frozen Irish Coffee</h2>
            <span class="product-price">₱309.00</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
        <!-- BOX 6 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee6-Honey-Almond-Milk-Flat-White.png" alt="" class="product-img">
            <h2 class="product-title">Honey Almond Milk Flat White</h2>
            <span class="product-price">₱249.00</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
        <!-- BOX 7 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee8-Maple-Bacon-Latte.png" alt="" class="product-img">
            <h2 class="product-title">Maple Bacon Latte</h2>
            <span class="product-price">₱239.00</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
        <!-- BOX 8 -->
        <div class="product-box">
            <img src="<?= $base_url ?>assets/image/coffee9-Pumpkin-Spice-Coffee.png" alt="" class="product-img">
            <h2 class="product-title">Pumpkin-Spice-Coffee</h2>
            <span class="product-price">₱319.00</span>
            <i class='fas fa-shopping-cart add-cart <?= isset($_SESSION["user_id"]) ? "add_cart" : null ?>'></i>
        </div>
    </div>
</section>

<!-- REVIEW -->
<section class="review" id="review">
    <h1 class="heading">reviews <span>what people says</span></h1>

    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <i class="fas fa-quote-left"></i>
                <i class="fas fa-quote-right"></i>
                <img src="<?= $base_url ?>assets/image/pic-1.png" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The coffee shop's cozy ambiance, friendly staff, and aromatic brews made it a delightful spot for
                    catching up with friends over a latte.</p>
                <h3>Miguel Cruz</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-left"></i>
                <i class="fas fa-quote-right"></i>
                <img src="<?= $base_url ?>assets/image/pic-2.png" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I was impressed by the extensive menu options, from classic espresso drinks to unique specialty
                    blends, each crafted with care and precision.</p>
                <h3>Maria Santos</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-left"></i>
                <i class="fas fa-quote-right"></i>
                <img src="<?= $base_url ?>assets/image/pic-3.png" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The coffee shop's attention to detail in both the presentation of their beverages and the
                    selection of locally sourced beans truly elevated the coffee-drinking experience</p>
                <h3>Antonio Reyes</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-left"></i>
                <i class="fas fa-quote-right"></i>
                <img src="<?= $base_url ?>assets/image/pic-4.png" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The coffee shop's inviting atmosphere, adorned with warm lighting and comfortable seating,
                    provided the perfect setting for a relaxed morning coffee or an afternoon pick-me-up.</p>
                <h3>Sofia Gonzales</h3>
                <span>Satisfied Client</span>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- BOOK -->
<section class="book" id="book">
    <h1 class="heading">booking <span>reserve a table</span></h1>

    <form action="javascript:void(0)">
        <input type="text" placeholder="Name" class="box">
        <input type="email" placeholder="Email" class="box">
        <input type="number" placeholder="Number" class="box">
        <textarea name="" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>
</section>