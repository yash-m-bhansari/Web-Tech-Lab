<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rahul Verma | Portfolio</title>
	<link rel="stylesheet" href="form.css" />
</head>
<body>
	<div class="main">
    <?php
	$servername = "localhost";
	$username = "root";     
	$password = "";         
	$dbname = "pdeu";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT user_id, name, email, role FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<h1>Table Fetched from MySql</h1>";
		echo "<table border='1'>";
		echo "<tr><th>User ID</th><th>Name</th><th>Email</th><th>Role</th></tr>";
		
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["user_id"] . "</td>";
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["role"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "No results found.";
	}
	$conn->close();
	?>
	</div>
</body>
</html>
