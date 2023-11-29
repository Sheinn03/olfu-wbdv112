<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> Functions </title>
		<meta name = "description" content = "This is for WBDV112 final lessons">
		<meta name = "keywords" content = "HTML, functions, MySQL">
		<meta name ="author" content = "Sheinn D. Reyes">
		<link rel="stylesheet" href="css/styles.css">
	</head>
<body>
    <header>
        <h1>Functions</h1>
        
    </header>

    <main>
	<h1> Aggregate Functions </h1>
       <?php
		session_start();

		include('config.php'); // Include your database connection 
	   
		// AVG – Calculate the average value of the 'value' column
		$avg_query = "SELECT AVG(value) AS average_value FROM data_values";
		$avg_result = $conn->query($avg_query);
		$avg_row = $avg_result->fetch_assoc();
		$average_value = $avg_row['average_value'];

		// COUNT – Count the number of rows in the 'data_values' table
		$count_query = "SELECT COUNT(*) AS row_count FROM data_values";
		$count_result = $conn->query($count_query);
		$count_row = $count_result->fetch_assoc();
		$row_count = $count_row['row_count'];

		// INSTR – Return the position of the first occurrence of a substring in a string
		$instr_query = "SELECT INSTR('hello world', 'world') AS position";
		$instr_result = $conn->query($instr_query);
		$instr_row = $instr_result->fetch_assoc();
		$position = $instr_row['position'];

		// SUM – Calculate the sum of the 'value' column
		$sum_query = "SELECT SUM(value) AS total_sum FROM data_values";
		$sum_result = $conn->query($sum_query);
		$sum_row = $sum_result->fetch_assoc();
		$total_sum = $sum_row['total_sum'];

		// MIN – Find the minimum value in the 'value' column
		$min_query = "SELECT MIN(value) AS min_value FROM data_values";
		$min_result = $conn->query($min_query);
		$min_row = $min_result->fetch_assoc();
		$min_value = $min_row['min_value'];

		// MAX – Find the maximum value in the 'value' column
		$max_query = "SELECT MAX(value) AS max_value FROM data_values";
		$max_result = $conn->query($max_query);
		$max_row = $max_result->fetch_assoc();
		$max_value = $max_row['max_value'];

		// Output the results
		echo "Average Value: " . $average_value . "<br>";
		echo "Row Count: " . $row_count . "<br>";
		echo "Position: " . $position . "<br>";
		echo "Total Sum: " . $total_sum . "<br>";
		echo "Min Value: " . $min_value . "<br>";
		echo "Max Value: " . $max_value . "<br>";

		// Close connection
		$conn->close();
	   ?>
	   
	   <h1> String Functions </h1>
	   <?php
		include('config.php'); // Include your database connection
		// Query examples using string functions
		$query_examples = [
			"CONCAT('Hello', ' World') AS concatenated_string",
			"text_value, LENGTH(text_value) AS byte_length, CHAR_LENGTH(text_value) AS character_length",
			"LEFT(text_value, 5) AS left_part",
			"LOWER(text_value) AS lower_case",
			"LPAD(text_value, 30, '*') AS left_padded",
			"LTRIM(text_value) AS trimmed_left",
			"RIGHT(text_value, 5) AS right_part",
			"REPLACE(text_value, 'sample', 'replacement') AS replaced_string",
			"SUBSTRING(text_value, 6, 10) AS substring_result",
			"TRIM(BOTH ' ' FROM text_value) AS trimmed_string",
			"REPLACE(text_value, ' ', '_') AS replaced_all_string",
			"REVERSE(text_value) AS reversed_string",
			"RPAD(text_value, 30, '*') AS right_padded",
			"RTRIM(text_value) AS trimmed_right",
			"UPPER(text_value) AS upper_case"
		];

		foreach ($query_examples as $query) {
			$sql = "SELECT $query FROM sample_strings";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<b>Query:</b> $sql<br><br>";
				echo "<table border='1'><tr>";
				while ($fieldinfo = $result->fetch_field()) {
					echo "<th>{$fieldinfo->name}</th>";
				}
				echo "</tr>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					foreach ($row as $value) {
						echo "<td>$value</td>";
					}
					echo "</tr>";
				}
				echo "</table><br><br>";
			} else {
				echo "No results found for query: $sql<br><br>";
			}
		}

		// Close connection
		$conn->close(); 
	   ?>
	   
	   <h1> Date and Time Functions </h1>
	   <?php
		include('config.php'); // Include your database connection
		// Query examples using date functions
		$query_examples = [
			"CURDATE() AS current_date_value",
			"event_date, DATEDIFF(CURDATE(), event_date) AS days_difference",
			"DAY(event_date) AS day_of_month",
			"MONTH(event_date) AS month_value",
			"NOW() AS current_date_time_value",
			"SYSDATE() AS sys_date_value"
		];

		foreach ($query_examples as $query) {
			$sql = "SELECT $query FROM sample_dates";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<b>Query:</b> $sql<br><br>";
				echo "<table border='1'><tr>";
				while ($fieldinfo = $result->fetch_field()) {
					echo "<th>{$fieldinfo->name}</th>";
				}
				echo "</tr>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					foreach ($row as $value) {
						echo "<td>$value</td>";
					}
					echo "</tr>";
				}
				echo "</table><br><br>";
			} else {
				echo "No results found for query: $sql<br><br>";
			}
		}

		// Close connection
		$conn->close();
	   ?>
	   
	   <h1> Math Functions </h1>
	   <?php
		include('config.php'); // Include your database connection
		// Query examples using mathematical functions
		$query_examples = [
			"value, ABS(value) AS absolute_value",
			"value, CEIL(value) AS ceiling_value",
			"value, FLOOR(value) AS floor_value",
			"value, MOD(value, 5) AS modulus_value",
			"value, ROUND(value, 1) AS rounded_value",
			"value, TRUNCATE(value, 1) AS truncated_value"
		];

		foreach ($query_examples as $query) {
			$sql = "SELECT $query FROM data_values";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<b>Query:</b> $sql<br><br>";
				echo "<table border='1'><tr>";
				while ($fieldinfo = $result->fetch_field()) {
					echo "<th>{$fieldinfo->name}</th>";
				}
				echo "</tr>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					foreach ($row as $value) {
						echo "<td>$value</td>";
					}
					echo "</tr>";
				}
				echo "</table><br><br>";
			} else {
				echo "No results found for query: $sql<br><br>";
			}
		}

		// Close connection
		$conn->close();
	   ?>
	   
	   
	   
    </main>

    <footer>
        <p>&copy; 2023 Finals. All rights reserved.</p>
    </footer>
</body>
</html>