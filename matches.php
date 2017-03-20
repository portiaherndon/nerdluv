<?php include("top.html"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Matches
		</title>
		
		
	
	</head>
	<body>
		<form action = "matches-submit.php" method ="get">
			<fieldset>
				<legend>Returning User: </legend>
				<ul>
				<strong>Name: </strong><input type="text" size="16" maxlength="16" name="name" /><br>
				</ul>
				<input type="submit" value="View My Matches" />
			</fieldset>
		</form>
	</body> 
</html>
<?php include("bottom.html"); ?>
