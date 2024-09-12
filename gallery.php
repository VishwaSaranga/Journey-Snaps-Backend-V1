<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Snaps | Gallery</title>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/gallery.css">
    <script src="Scripts/cart.js" defer></script>
</head>
<body>
    <nav>
        <a href="index.php">
            <img src="Images/Logo White.png" alt="Logo">
        </a>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">&#9776;</label>
        <ul class="menu">
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="stories.php">Stories</a></li>
            <li><a href="cart.php">Cart(<span id="cart-count">0</span>)</a></li>
            <li><a href="register.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contact.php">About Us</a></li>
        </ul>
    </nav>
    

    <main class="MainGallery">
        <section>
            <div class="galleryHeading">
                <h2 class="gH2">Journey Snaps Gallery</h2>
            </div>
            <div class="gallery">
                <div class="photo-item">
                    <img src="Images/IMG01.jpg" alt="Photo 1">
                    <p><strong>Hike</strong></p>
                    <p>Rs.1500</p>
                    <button class="add-to-cart" data-id="1" data-name="Hike" data-price="1500">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG02.jpg" alt="Photo 2">
                    <p><strong>The Leopard</strong></p>
                    <p>Rs.2000</p>
                    <button class="add-to-cart" data-id="2" data-name="The Leopard" data-price="2000">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG03.jpg" alt="Photo 3">
                    <p><strong>Backpacker</strong></p>
                    <p>Rs.1200</p>
                    <button class="add-to-cart" data-id="3" data-name="Backpacker" data-price="1200">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG04.jpg" alt="Photo 4">
                    <p><strong>Sunset Art</strong></p>
                    <p>Rs.3400</p>
                    <button class="add-to-cart" data-id="4" data-name="Sunset Art" data-price="3400">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG05.jpg" alt="Photo 5">
                    <p><strong>The Big Guy</strong></p>
                    <p>Rs.2200</p>
                    <button class="add-to-cart" data-id="5" data-name="The Big Guy" data-price="2200">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG06.jpg" alt="Photo 6">
                    <p><strong>View Point</strong></p>
                    <p>Rs.6000</p>
                    <button class="add-to-cart" data-id="6" data-name="View Point" data-price="6000">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG07.jpg" alt="Photo 7">
                    <p><strong>Camp Fire</strong></p>
                    <p>Rs.4800</p>
                    <button class="add-to-cart" data-id="7" data-name="Camp Fire" data-price="4800">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG08.jpg" alt="Photo 8">
                    <p><strong>River Peace</strong></p>
                    <p>Rs.3300</p>
                    <button class="add-to-cart" data-id="8" data-name="River Peace" data-price="3300">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG09.jpg" alt="Photo 9">
                    <p><strong>Cold Morning</strong></p>
                    <p>Rs.1800</p>
                    <button class="add-to-cart" data-id="9" data-name="Cold Morning" data-price="1800">Add to Cart</button>
                </div>
                <div class="photo-item">
                    <img src="Images/IMG10.jpg" alt="Photo 10">
                    <p><strong>The Wild Elk</strong></p>
                    <p>Rs.3800</p>
                    <button class="add-to-cart" data-id="10" data-name="The Wild Elk" data-price="3800">Add to Cart</button>
                </div>
            </div>
        </section>
    </main>    
    

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>
