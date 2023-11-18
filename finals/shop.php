<?php
session_start();
include('config.php'); // Include your database connection

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> Final Lessons </title>
		<meta name = "description" content = "This is for WBDV112 final lessons">
		<meta name = "keywords" content = "HTML, functions, MySQL">
		<meta name ="author" content = "Sheinn D. Reyes">
		<link rel="stylesheet" href="css/styles.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</head>
<body>
    <header>
        <h1>Shop</h1>
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
	<section class="featured-products">
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Display product details dynamically
        echo "<div class='product'>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($row['image_path']) . "' alt='" . $row['product_name'] . "'>";
        echo "<h3>" . $row['product_name'] . "</h3>";
        echo "<p>" . $row['product_desc'] . "</p>";
        echo "<span class='price'>P" . $row['price'] . "</span>";

        if (isset($_SESSION['username'])) {
            // If user is logged in, allow adding to cart with quantity input
				 header('Location: user-shop.php'); // Redirect to login page if not logged in
				exit();
        } else {
            // If user is not logged in, show a sign-in prompt
            echo "<p>Sign in to add to cart</p>";
            echo "<a href='signin.php'><button>Add to Cart</button></a>";
        }

        echo "</div>";
    }
} else {
    echo "No products found.";
}
?>

</section>
    </main>

    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>
</body>
</html>