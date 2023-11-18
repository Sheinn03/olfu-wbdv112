
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "This is for WBDV112 final lessons">
	<meta name = "keywords" content = "HTML, functions, MySQL">
	<meta name ="author" content = "Sheinn D. Reyes">
	<link rel="stylesheet" href="css/styles.css">
    <title>Registration</title>
</head>
<body>
    <header>
        <h1>User Registration</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="signin.php">Sign In</a></li>
                <li><a href="profile.php">Profile</a></li>
				<li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="register.php" method="post">
            <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="middlename">Middle Name (Optional):</label>
        <input type="text" id="middlename" name="middlename"><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="retype_password">Retype Password:</label>
        <input type="password" id="retype_password" name="retype_password" required><br><br>

        <label for="mobile_number">Mobile Number:</label>
        <input type="text" id="mobile_number" name="mobile_number" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>

        <button type="submit">Register</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>

</body>
</html>
