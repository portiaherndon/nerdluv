<?php include("top.html"); ?>
<!DOCTYPE html>
<html>
<!-- SIGNUP.PHP PRESENTS A PAGE FOR THE USER TO ENTER THEIR INFORMATION. THERE IS NO PHP INCLUDED ON THIS PAGE. THE MAIN PURPOSE OF THIS PAGE IS TO SEND THE USER'S INFORMATION BY WAY OF FORM POST
-->

	<head>
		<title> Sign Up
		</title> 
	</head>
	<body>
	    <form action = "signup-submit.php" method="post" > <fieldset> 
	    	    <legend>New User Signup: </legend> 
			<ul> 
			    <li><strong>Name: </strong><input type="text" size="16" maxlength="16" name="name" /></li><br />
			    <li><strong>Gender: </strong><label><input type="radio" name="cc" value="M"/>Male</label>
			        <label><input type="radio" name="cc" value="F" checked ="checked" />Female</label></li><br />
			    <li><strong>Age: </strong><input type="text" size="6" maxlegnth="2" name="age" /></li><br />
			    <li><strong>Personality Type: </strong><input type="text" name="person" size="6" maxlength="4" />
				(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't Know your type?</a>)</li><br />
			    <li><strong>Favorite OS: </strong>
			    <select name="Favorite OS">
			        <option selected="selected" value="Windows" />Windows </option>
				<option value="Mac OS X" />Mac OS X</option>
				<option value="Linux" />Linux</option>
			    </select></li><br />
			    <li><strong>Seeking Age: </strong><input type="text" size="6" maxlength="2" placeholder="min" name="min"/> to <input type="text" size="6" maxlength="2" placeholder="max" name="max" /></li><br /> 
			<input type="submit" value="Sign Up" />
		</fieldset>
	    </form>
	</body>
</html>
<?php include("bottom.html"); ?> 

