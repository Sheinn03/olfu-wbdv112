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
		<?php
			session_start();

			include('config.php'); // Include your database connection

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$lastname = $_POST['lastname'];
				$firstname = $_POST['firstname'];
				$middlename = isset($_POST['middlename']) ? $_POST['middlename'] : '';
				$username = $_POST['username'];
				$password = $_POST['password'];
				$retypePassword = $_POST['retype_password'];
				$mobileNumber = $_POST['mobile_number'];
				$address = $_POST['address'];

				if ($password !== $retypePassword) {
					echo "Passwords do not match.";
				} else {
					$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

					$sql = "INSERT INTO employee (lastname, firstname, middlename, username, password, mobile_number, address)
							VALUES ('$lastname', '$firstname', '$middlename', '$username', '$hashedPassword', '$mobileNumber', '$address')";

					if ($conn->query($sql) === TRUE) {
						echo "Registration successful!";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
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