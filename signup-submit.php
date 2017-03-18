<?DOCTYPE hmtl>
<html>
	<head>
		<title> Sign Up
		</title>
		<img src="photos/nerdluv.png" alt=nerdluv logo" />
	</head>

	<?php 
	if(!ctype_digit($_POST['age']))
	{
	?>
		<p> Error: Invalid input for age </p>	
	<?php	
	}
	elseif(!ctype_digit($_POST['min']))
	{
	?>
		<p> Error: Invalid input for minimum seeking age </p>
	<?php
	}
	elseif(!ctype_digit($_POST['max']))
	{
	?>
		<p> Error: Invalid input for minimum seeking age </p>
	<?php
	}
	elseif(($_POST['age'] <  18) || ($_POST['min'] < 18) || ($_POST['max'] < 18))
	{
	?>
		<p> Error: Age must no younger than 18 </p>
	<?php
	}
	elseif($_POST['max'] < $_POST['min'])
	{
	?>
		<p> Error: Max age must be larger than min age </p>
	<?php
	}
	elseif ((empty($_POST['name'])) || (empty($_POST['cc'])) || (empty($_POST['age'])) || (empty($_POST['person'])) || (empty($_POST['Favorite_OS'])) || (empty($_POST['min'])) || (empty($_POST['max'])))
	{
	?>
		<p>One or more of the required fields have been left empty</p>
	<?php
	} 
	else
	{
		$file = 'singles.txt';	
		$info1 = $_POST['name'];
		$info2 = $_POST['cc'];
		$info3 = $_POST['age'];
		$info4 = $_POST['person'];
		$info5 = $_POST['Favorite_OS'];
		$info6 = $_POST['min'];
		$info7 = $_POST['max'];
		$info = array($info1,$info2,$info3,$info4,$info5,$info6,$info7);
		file_put_contents($file,implode(',',$info)."\n", FILE_APPEND | LOCK_EX);
	?>
	<body>
		<p><strong> Thank you! </strong><br><br>Welcome to NerdLuv, <?php echo $_POST['name'] ?>
		
	</body>
	<?php 
	}
	?>	
	<footer>
		<p>The page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdy luv to begin! Thank you for using our site. Results and page (C) Copyright NerdLuv Inc. </p>
		<a href="index.php">
		<img src="back.gif" alt="homepage" title="homepage" />
		</a>
	</footer>
	
		
	
</html>


