<?php include("top.html"); ?>
<!-- ON THIS PAGE, THE USER LOGS IN WITH THEIR INFORMATION. THE NAME IS SENT TO MATCHES-SUBMIT.PHP USING A FORM, BUT THIS TIME, BY WAY OF GET --> 
    <form action = "matches-submit.php" method ="get">
	<fieldset>
   	    <legend>Returning User: </legend>
		<ul>
		    <li><strong>Name: </strong><input type="text" maxlength="16" size="16" name="name" /></li>
		</ul>
	    <input type="submit" value="View My Matches" />
	</fieldset>
    </form> 
<?php include("bottom.html"); ?>

