<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "This is for WBDV112 final lessons">
	<meta name = "keywords" content = "HTML, functions, MySQL">
	<meta name ="author" content = "Sheinn D. Reyes">
	<link rel="stylesheet" href="css/styles.css">
    <title>Sign In</title>
</head>
<body>
    <header>
        <h1>User Signin</h1>
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
        <form action="signin_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign In</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>

</body>
</html>
