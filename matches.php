<?php include("top.html"); ?>
<!DOCTYPE html>
<html>
<!-- ON THIS PAGE, THE USER LOGS IN WITH THEIR INFORMATION. THE NAME IS SENT TO MATCHES-SUBMIT.PHP USING A FORM, BUT THIS TIME, BY WAY OF GET -->
	<head>
		<title>Matches
		</title> 
	</head>
	<body>
		<form action = "matches-submit.php" method ="get">
			<fieldset>
				<legend>Returning User: </legend>
				<ul>
				<li><strong>Name: </strong><input type="text" size="16" maxlength="16" name="name" /></li>
				</ul>
				<input type="submit" value="View My Matches" />
			</fieldset>
		</form>
	</body> 
</html>
<?php include("bottom.html"); ?>
