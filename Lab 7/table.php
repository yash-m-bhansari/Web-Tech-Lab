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
			$n = 58;
			echo "<h2>Table of $n</h2>";
			echo '<table id="table">';
			for ($i = 1; $i <= 10; ++$i) {
				echo "
				<tr>
					<td>$n</td>
					<td>x</td>
					<td>$i</td>
					<td>=</td>
					<td>".$n*$i."</td>
				</tr>";
			}
			echo "</table>";
		?>
		<a href="index.html">
			<button>Go Back</button>
		</a>
	</div>
</body>

</html>