<?php include("top.html"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> Sign Up
		</title>
		
	
		
	</head>
	<body>
		<form action = "signup-submit.php" method="post">
			<div>
				Name: <input type="text" size="16" maxlength="16" name="name" /><br>
				Gender: <label><input type="radio" name="cc" value="M"/>male</label>
				        <label><input type="radio" name="cc" value="F" checked ="checked" />female</label><br>
				Age:  <input type="text" size="6" maxlegnth="2" name="age" /><br>
				Personality Type: <input type="text" name="person" size="6" maxlength="4" />
				<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't Know your type?)</a><br>
				Favorite OS: <select name="Favorite OS">
						<option selected="selected" value="Windows" />Windows </option>
						<option value="Mac OS X" />Mac OS X</option>
						<option value="Linux" />Linux</option>
					      </select><br>
				Seeking Age: <input type="text" size="6" maxlength="2" placeholder="min" name="min"/> to <input type="text" size="6" maxlength="2" placeholder="max" name="max" /><br>
				<br>
				<input type="submit" value="Sign Up" />
			</div>
		</form>
	</body>
</html>
<?php include("bottom.html"); ?> 

