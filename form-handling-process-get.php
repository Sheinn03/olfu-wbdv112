<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> Midterm Lessons - Form Handling </title>
		<meta name = "description" content = "This is for WBDV112 midterm lessons">
		<meta name = "keywords" content = "HTML, functions, methods, strings, arrays">
		<meta name ="author" content = "Sheinn D. Reyes">
		<link rel="stylesheet" href="https://classless.de/classless-tiny.css">
	</head>
<body>
	<p> Form Handling Example </p>
	<h1> User Registration Form using <b>GET</b> Result</h1>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "GET") {
				// Retrieve the form data using $_GET
				$fname = $_GET['fname'];
				$lname = $_GET['lname'];
				$mname = $_GET['mname'];
				$birth = $_GET['birth'];
				$course = $_GET['course'];

				// Display the received data
				echo "<h2>Form Data (GET):</h2>";
				echo "First Name: " . $fname . "<br>";
				echo "Last Name: " . $lname . "<br>";
				echo "Middle Name: " . $mname . "<br>";
				echo "Date of Birth: " . $birth . "<br>";
				echo "Course: " . $course . "<br>";
			}
	?>
	
<p><a href = "index.php"> Go back to index </a></p>
<p><a href = "form-handling.php"> Go back to Form Handling Page </a></p>
</body>
</html>