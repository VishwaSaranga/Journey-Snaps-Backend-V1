<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Snaps | About</title>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/contact.css">
    <script src="Scripts/contact.js" defer></script>
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
            <li><a href="register.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contact.php">About Us</a></li>
        </ul>
    </nav>

    <!-- About Us Section -->
    <section class="about-us">
        <h2>About Us</h2>
        <div class="about-content">
            <h3>Journey Snaps</h3>
            <p class="slogan">"Explore, Capture, Share"</p>
            <p class="description">
                We are a small company committed to providing the best travel and wildlife photographs. Our team is dedicated to creativity, quality, and delivering value to our clients.
            </p>
            <ul class="contact-info">  
                <li>Colombo, Sri Lanka</li>
                <li>info@journeysnaps.com</li>
                <li>+94-112487514</li>
            </ul>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-us">
        <h2>Contact Us</h2>
        <form action="#" method="POST" class="contact-form" onsubmit="return validateContactForm()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5"></textarea>
            </div>
            <div class="form-buttons">
                <button type="submit" class="send-btn">Send</button>
                <button type="reset" class="cancel-btn">Cancel</button>
            </div>
        </form>
    
        <!-- Validation and Success Modals -->
        <div id="validationModal" class="modal">
            <div class="modal-content">
                <h3 id="modalMessage"></h3>
                <button class="close-btn" onclick="closeModal('validationModal')">Close</button>
            </div>
        </div>
    
        <div id="successModal" class="modal">
            <div class="modal-content">
                <h3>Message Sent Successfully!</h3>
                <button class="close-btn" onclick="handleSuccess()">OK</button>
            </div>
        </div>
    
    </section>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>
