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
	</head>
<body>
    <header>
        <h1>Home</h1>
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
        <section class="hero" style="background-image: url('images/hero-bg.jpg');">
            <h2>Discover Amazing Products</h2>
            <p>Shop the latest trends and find great deals on a wide range of products.</p>
            <a href="products.php" class="button">Explore Now</a>
        </section>
		<br>
		<h2>Featured Products</h2> 
        <section class="featured-products">
           
            <div class="product">
                <img src="images/product1.jpg" alt="Product 1">
                <h3>Mouse</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <span class="price">P400.00</span>
				<br>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="images/product2.jpg" alt="Product 2">
                <h3>Keyboard</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <span class="price">P600.00</span>
				<br>
                <button>Add to Cart</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>
</body>
</html>