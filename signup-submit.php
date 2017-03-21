<?php include("top.html"); ?>
<?DOCTYPE hmtl>
<html>
	<head>
		<title> Sign Up
		</title>
		
	</head> 
	<?php
	$name=$_POST['name'];
	$sex=$_POST['cc'];
	$age=$_POST['age'];
	$person=$_POST['person'];
	$OS=$_POST['Favorite_OS'];
	$min=$_POST['min']; 
	$max=$_POST['max']; 
	if(!ctype_digit($age)) { 
	    ?> <p> Error: Invalid input for age </p><?php	
	}
	elseif(!ctype_digit($min)) {
	    ?><p> Error: Invalid input for minimum seeking age </p><?php
	}
	elseif(!ctype_digit($max)) {
	    ?><p> Error: Invalid input for maximum seeking age </p><?php
	} 
	elseif($max < $min) {
	    ?> <p> Error: Max age must be larger than min age </p> <?php
	}
	elseif(!preg_match("/^[IE][NS][TF][JP]$/",$person)) {
	     ?> <p> Error: Invalid put for personality type </p> <?php
	}
	elseif ((empty($name)) || (empty($sex)) || (empty($age)) || (empty($person)) || (empty($OS)) || (empty($min)) || (empty($max)))
	{
	?>
		<p>One or more of the required fields have been left empty</p>
	<?php
	}
	else
	{ 
	    $info = array($name,$sex,$age,$person,$OS,$min,$max);
	    file_put_contents($file,implode(',',$info)."\n", FILE_APPEND | LOCK_EX); 
	    ?>
	    <body>
	        <p><strong> Thank you! </strong><br><br>Welcome to NerdLuv, <?php echo $_POST['name'] ?><br><br>
		    Now <a href="matches.php">log in to see your matches! </a>
	
	    </body>
	<?php 
	} 
	?>	
</html>
<?php include("bottom.html"); ?> 
