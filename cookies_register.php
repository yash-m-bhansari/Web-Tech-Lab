<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'creds');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "Username already exists. Try another one.";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            setcookie("registered_user", $username, time() + (2 * 60), "/");
            header("Location: index.html");
            exit();
        } else {
            echo "Registration failed.";
        }
    }
}
?>

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
	<h2>Register using Cookies</h2>
	<form method="post">
		<input type="text" name="username" placeholder="Username" required><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<button type="submit">Register</button>
	</form>
	</div>
</body>
</html>


