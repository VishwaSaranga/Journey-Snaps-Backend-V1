<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Snaps | Cart</title>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/cart.css">
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

    <main>
        <section>
            <h2>Items in Your Cart</h2>
            <div class="cart-container">
                <div id="cart-items">
                    <!-- Cart items dynamically inserted here -->
                </div>
                <div id="cart-total">
                    <strong>Total: Rs.<span id="total-price">0</span></strong>
                </div>
                <button id="checkout-btn">Checkout</button>

                <!-- Checkout Modal -->
                <div id="checkoutModal" class="modal">
                    <div class="modal-content">
                        <h3>Checkout complete!</h3>
                        <button class="close-btn" onclick="closeCheckoutModal()">OK</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>
