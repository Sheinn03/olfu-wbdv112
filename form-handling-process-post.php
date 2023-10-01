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
	<h1> User Registration Form using <b>POST</b> Result</h1>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Check if the form variables are set
			if (isset($_POST['fname'])) {
				$fname = $_POST['fname'];
				echo "First Name: " . $fname . "<br>";
			}

			if (isset($_POST['lname'])) {
				$lname = $_POST['lname'];
				echo "Last Name: " . $lname . "<br>";
			}

			if (isset($_POST['mname'])) {
				$mname = $_POST['mname'];
				echo "Middle Name: " . $mname . "<br>";
			}

			if (isset($_POST['birth'])) {
				$birth = $_POST['birth'];
				echo "Date of Birth: " . $birth . "<br>";
			}

			if (isset($_POST['course'])) {
				$course = $_POST['course'];
				echo "Course: " . $course . "<br>";
			}
		}
	?>
	
<p><a href = "index.php"> Go back to index </a></p>
<p><a href = "form-handling.php"> Go back to Form Handling Page </a></p>
</body>
</html>