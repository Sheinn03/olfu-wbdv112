
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
        <h1>My Profile</h1>
        <nav>
            <ul>
                <li><a href="user-index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
				<li><a href="user-shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
	<?php
    // Assuming you have already connected to the database in config.php
    include('config.php'); // Include your database connection

    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        header('Location: signin.php'); // Redirect to login page if not logged in
        exit();
    }

    // Fetch user data from the database based on the logged-in user
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM employee WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $middlename = $row['middlename'];
            $mobileNumber = $row['mobile_number'];
            $address = $row['address'];

            // HTML for displaying user profile information
            echo "
        
                <h1>User Profile</h1>
                <p><strong>Username:</strong> $username</p>
                <p><strong>First Name:</strong> $firstname</p>
                <p><strong>Last Name:</strong> $lastname</p>
                <p><strong>Middle Name:</strong> $middlename</p>
                <p><strong>Mobile Number:</strong> $mobileNumber</p>
                <p><strong>Address:</strong> $address</p>
				<p><a href='logout.php'>Logout</a></p>
                <!-- You can add more profile details here -->
           
          ";
        }
    } else {
        echo "User data not found.";
    }

    $conn->close();
?>


    </main>
    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>

</body>
</html>
