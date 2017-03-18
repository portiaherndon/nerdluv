<!DOCTYPE html>
<html>
	<head>
		<title>Matches
		</title>
		<img src="photos/nerdluv.png" alt="nerdluv logo" /><br>
		where meek geeks meet<br><br>
	</head>
	<body>
		Matches for <?php echo $_GET['name']; ?><br>
		<?php
		$file="singles.txt";
		$search= $_GET['name']; 
		?>
	</body>
</html>
