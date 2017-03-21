<?php include("top.html"); ?>
<!-- SIGNUP.PHP PRESENTS A PAGE FOR THE USER TO ENTER THEIR INFORMATION. THERE IS NO PHP INCLUDED ON THIS PAGE. THE MAIN PURPOSE OF THIS PAGE IS TO SEND THE USER'S INFORMATION BY WAY OF FORM POST
--> 
    <form action = "signup-submit.php" method="post" > 
	<fieldset> 
    	    <legend>New User Signup: </legend> 
		<ul> 
		    <li><strong>Name: </strong><input type="text" maxlength="16" size="16" name="name" /></li>
		    <li><strong>Gender: </strong><label><input type="radio" name="cc" value="M"/>Male</label>
		        <label><input type="radio" name="cc" value="F" checked ="checked" />Female</label></li>
		    <li><strong>Age: </strong><input type="text" maxlength ="2" size="6" name="age" /></li>
		    <li><strong>Personality Type: </strong><input type="text" name="person" size="6" maxlength="4" />
			(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't Know your type?</a>)</li>
		    <li><strong>Favorite OS: </strong>
		    <select name="Favorite OS">
		        <option selected="selected" value="Windows">Windows </option>
			<option value="Mac OS X">Mac OS X</option>
			<option value="Linux" >Linux</option>
		    </select></li>
		    <li><strong>Seeking Age: </strong><input type="text" maxlength="2" size="6" placeholder="min" name="min"/> to <input type="text" maxlength="2" size="6" placeholder="max" name="max" /></li>
		</ul> 
		<input type="submit" value="Sign Up" />
	</fieldset>
    </form> 
<?php include("bottom.html"); ?> 

