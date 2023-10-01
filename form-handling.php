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
	<h1> User Registration Form using <b>POST</b> </h1>
		<form action = "form-handling-process-post.php" method="POST">
		  <table>
			<tr>
			  <td><label for="fname">First Name:</label></td>
			  <td><input type="text" id="firstname" name="fname" required></td>
			</tr>
			<tr>
			  <td><label for="lname">Last Name:</label></td>
			  <td><input type="text" id="lname" name="lname" required></td>
			</tr>
			<tr>
			  <td><label for="mname">Middle Name:</label></td>
			  <td><input type="text" id="mname" name="mname"></td>
			</tr>
			<tr>
			  <td><label for="birth">Date of Birth:</label></td>
			  <td><input type="date" id="birth" name="birth" required></td>
			</tr>
			<tr>
			  <td><label for="course">Course:</label></td>
			  <td>
				<select id="course" name="course" required>
				  <option value="" disabled selected>Select a course</option>
				  <option value="bsit">BSIT</option>
				  <option value="bscs">BSCS</option>
				</select>
			  </td>
			</tr>
		  </table>

	  <input type="submit" value="Submit"> 
	  <input type="reset" value="Clear">
	</form>
	
	<h1> User Registration Form using <b>GET</b> </h1>
		<form action = "form-handling-process-get.php" method="GET">
		  <table>
			<tr>
			  <td><label for="fname">First Name:</label></td>
			  <td><input type="text" id="firstname" name="fname" required></td>
			</tr>
			<tr>
			  <td><label for="lname">Last Name:</label></td>
			  <td><input type="text" id="lname" name="lname" required></td>
			</tr>
			<tr>
			  <td><label for="mname">Middle Name:</label></td>
			  <td><input type="text" id="mname" name="mname"></td>
			</tr>
			<tr>
			  <td><label for="birth">Date of Birth:</label></td>
			  <td><input type="date" id="birth" name="birth" required></td>
			</tr>
			<tr>
			  <td><label for="course">Course:</label></td>
			  <td>
				<select id="course" name="course" required>
				  <option value="" disabled selected>Select a course</option>
				  <option value="bsit">BSIT</option>
				  <option value="bscs">BSCS</option>
				</select>
			  </td>
			</tr>
		  </table>

	  <input type="submit" value="Submit"> 
	  <input type="reset" value="Clear">
	</form>
	
	
	
	
<p><a href = "index.php"> Go back to index </a></p>
</body>
</html>