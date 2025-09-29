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
    <form method="post">
        <h3>calculator for post</h3><br>
		<table>
			<tr>
				<td>Enter first number:</td>
				<td><input type="number" name="num1" value="<?php if(isset($_POST['num1'])) echo $_POST['num1']; ?>" required></td>
			</tr>
			<tr>
				<td>Enter second number:</td>
				<td><input type="number" name="num2" value="<?php if(isset($_POST['num2'])) echo $_POST['num2']; ?>" required></td>
			</tr>
		</table>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['num1'];
        $b = $_POST['num2'];

        echo "<h3>Results:</h3>";
		echo "<table>
		<tr><td>$a</td><td>+</td><td>$b</td><td>=</td><td>".($a + $b)."</td></tr>
		<tr><td>$a</td><td>+</td><td>$b</td><td>=</td><td>".($a - $b)."</td></tr>
		<tr><td>$a</td><td>+</td><td>$b</td><td>=</td><td>".($a * $b)."</td></tr>
		</table>";
    }
    ?>
	</div>
</body>
</html>
