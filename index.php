<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Snaps | Home</title>
    <link rel="stylesheet" href="Styles/styles.css">
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

    <main class="Index">
        <section>
            <?php
                // Start the session
                session_start();

                // Check if the userName is set in the session
                if (isset($_SESSION['userName'])) {
                    $userName = $_SESSION['userName'];
                    echo "Welcome, $userName!";
                } else {
                    echo "You are not logged in.";
                }
            ?>
            <h2>Explore Stunning Travel Photos</h2>
            <p>Your platform to buy and enjoy high-quality travel and wildlife photos.</p>
            <button onclick="location.href='gallery.php'">Shop Now</button>
            <button onclick="location.href='stories.php'">Locations</button>
        </section>
    </main>

    <footer>
        <p>&copy; Journey Snaps 2024</p>
    </footer>
</body>
</html>


