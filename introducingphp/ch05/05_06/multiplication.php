<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
	<tr>
		<th>&nbsp;</th>
		<?php 
		$i = 1;
			while ($i <= 12) {
			echo "<th>$i</th>";
			$i++;
			}
		?>
	</tr>
	<?php
	$i = 1;
	do {
		echo "<tr><th>$i</th>";
			for ($j = 1; $j <= 12; $j++) {
				echo "<td>" . $j*$i . "</td>";
			}
		echo "</tr>";
		$i++;
	} while ($i <= 12);
	?>
</table>
</body>
</html>