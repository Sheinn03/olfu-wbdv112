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
		<?php
		session_start();

		include('config.php'); // Include your database connection

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];

			// Check if the username exists in the database
			$sql = "SELECT * FROM employee WHERE username = '$username'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// User found, check password
				$row = $result->fetch_assoc();
				$hashedPassword = $row['password'];

				if (password_verify($password, $hashedPassword)) {
					// Sign in successful, store user details in session
					$_SESSION['username'] = $row['username'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['lastname'] = $row['lastname'];
					$_SESSION['mobile_number'] = $row['mobile_number'];
					$_SESSION['address'] = $row['address'];
					header("Location: user-index.php");
					exit();
				} else {
					echo "Incorrect password";
					header("Location: signin.php");
					
				}
			} else {
				echo "Username not found";
			}
		}

		$conn->close();
		?>
	</main>
    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>

</body>
</html>
