<?php include("top.html"); ?>
<?DOCTYPE hmtl>
<html>
	<head>
		<title> Sign Up
		</title>
		
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
	elseif($_POST['max'] < $_POST['min'])
	{
	?>
		<p> Error: Max age must be larger than min age </p>
	<?php
	}
	elseif(($_POST['person'] !== 'ESTJ') && ($_POST['person'] !== 'ISTJ') && ($_POST['person'] !== 'ENTJ') && ($_POST['person'] !== 'INTJ') && ($_POST['person'] !== 'ESTP') && ($_POST['person'] !== 'ISTP') && ($_POST['person'] !== 'ENTP') && (_POST['person'] !== 'INTP') && ($_POST['person'] !== 'ESFJ') && ($_POST['person'] !== 'ISFJ') && ($_POST['person'] !== 'ENFJ') && ($_POST['person'] !== 'INFJ') && ($_POST['person'] !== 'ESFP') && ($_POST['person'] !== 'ISFP') && ($_POST['person'] !== 'ENFP') && ($_POST['person'] !== 'INFP')) 
	{
	?>
		<p> Error: Invalid put for personality type </p>
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
		$file = "singles.txt";
		$lines = explode("\n",file_get_contents($file)); 
		for($x=0; $x<count($lines);++$x)
		{
			$elements = explode(",",$lines[$x]);
			if(strcmp($_POST['name'],$elements[0]) === 0)
			{ 
			?> 
				<p> Error: User already exists </p>	
			<?php
			break; 
			} 
		}
		if($x === count($lines))
		{ 
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
			<p><strong> Thank you! </strong><br><br>Welcome to NerdLuv, <?php echo $_POST['name'] ?><br><br>
			Now <a href="matches.php">log in to see your matches! </a>
		
		</body>
		<?php 
		}
	}
	?>	
</html>
<?php include("bottom.html"); ?>


