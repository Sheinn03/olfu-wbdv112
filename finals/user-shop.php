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
                <li><a href="user-index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
				<li><a href="user-shop.php">Shop</a></li>
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
            echo "<form class='add-to-cart-form'>";
            echo "<input type='hidden' class='product-id' value='" . $row['product_ID'] . "'>";
            echo "<label for='quantity'>Quantity:</label>";
            echo "<input type='number' class='quantity' value='0' min='1' max='" . $row['quantity'] . "' required>";
            echo "<button type='button' class='add-to-cart-btn'>Add to Cart</button>";
				if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
						$product_id = $_POST['product_id'];
						$quantity = $_POST['quantity'];

						$sql = "SELECT * FROM products WHERE product_ID = $product_id";
						$result = $conn->query($sql);

						if ($result->num_rows == 1) {
							$row = $result->fetch_assoc();
							if ($quantity <= $row['quantity']) {
								// Create or update the cart in the session
								if (!isset($_SESSION['cart'])) {
									$_SESSION['cart'] = array();
								}

								// Check if the product already exists in the cart
								if (isset($_SESSION['cart'][$product_id])) {
									// If the product is already in the cart, update the quantity
									$_SESSION['cart'][$product_id] += $quantity;
								} else {
									// Add the product to the cart
									$_SESSION['cart'][$product_id] = $quantity;
								}
								echo "Product added to cart!";
							} else {
								echo "Not enough stock available.";
							}
						} else {
							echo "Product not found.";
						}
					}

			echo "<span class='added-to-cart'>Item added to cart!</span>";
			echo "</form>";
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

<script>
$(document).ready(function() {
    // Handle Add to Cart button enable/disable based on quantity
    $('.quantity').on('input', function() {
        var quantity = $(this).val();
        var addToCartBtn = $(this).siblings('.add-to-cart-btn');
        
        if (quantity > 0) {
            addToCartBtn.prop('disabled', false);
        } else {
            addToCartBtn.prop('disabled', true);
        }
    });

    // Handle Add to Cart button click
    $('.add-to-cart-btn').click(function() {
        var btn = $(this);
        var form = btn.closest('.add-to-cart-form');
        var productId = form.find('.product-id').val();
        var quantity = form.find('.quantity').val();

        // AJAX POST request to add item to cart
        $.post('cart.php', { 'product-id': productId, quantity: quantity }, function(response) {
            btn.parent().find('.added-to-cart').fadeIn().delay(2000).fadeOut();
            form.find('.quantity').val('0'); // Reset quantity to zero
            form.find('.add-to-cart-btn').prop('disabled', true); // Disable button again
            // You can add more actions here, like updating UI or displaying messages
        });
    });
});

</script>
</section>
    </main>

    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>
</body>
</html>