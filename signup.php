<!DOCTYPE html>
<html>
	<head>
		<title> Sign Up
		</title>
		<img src="photos/nerdluv.png" alt="nerdluv logo" />
		<br />
		<br />	
	</head>
	<body>
		<form action = "signup-submit.php" method="post">
			<div>
				Name: <input type="text" size="16" maxlength="16" name="name" /><br>
				Gender: <label><input type="radio" name="cc" value="male"/>male</label>
				        <label><input type="radio" name="cc" value="female" checked ="checked" />female</label><br>
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
	<footer>
		<p>This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdy luv to begin! Thank you for using our site. <br/>
		Results and page (C) Copyright NerdLuv Inc.
		</p>
                <a href="index.php">
		<img src="back.gif"alt="homepage" title="homepage"/> 
		</a>
	</footer>
	 

</html>
