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
		<form>
			<div>
				Name: <input type="text" size="16" maxlength="16" /><br>
				Gender: <label><input type="radio" name="cc" value="male"/>male</label>
				        <label><input type="radio" name="cc" value="female" checked ="checked" />female</label><br>
				Age:  <input type="text" size="6" maxlength="2" /><br>
				Personality Type: <input type="text" size="6" maxlength="4" />
				<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't Know your type?)</a><br>
				Favorite OS: <select name="Favorite OS">
						<option selected="selected">Windows</option>
						<option>Mac OS X</option>
						<option>Linux</option>
					      </select><br>
				Seeking Age: <input type="text" size="6" maxlength="2" placeholder="min" /> to <input type="text" size="6" maxlength="2" placeholder="max" /><br>
				<br>
				<input type="submit" value="Sign Up" />
			</div>
		</form>
	</body>
</html>
