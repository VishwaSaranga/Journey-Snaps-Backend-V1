<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Snaps | Login</title>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/form.css">
    <script src="Scripts/login.js" defer></script>
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

    <main>
        <section>
            <div class="loginPage">
                <div class="Box">
                    <h2>Login</h2>
                    <form name="loginform" method="post" action="Model/getLogin.php" onsubmit="return validateForm()">
                        <input type="text" name="email" id="email" placeholder="Email">
                        <input type="password" name="password" id="password" placeholder="Password">
                        <div class="button-container">
                            <input type="submit" value="Login">
                            <input type="reset" value="Clear">
                        </div>
                    </form>
            
                <!-- Pop-up Modal -->
                <div id="validationModal" class="modal">
                    <div class="modal-content">
                        <h3 id="modalMessage"></h3>
                        <button class="close-btn" onclick="closeModal()">Close</button>
                    </div>
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