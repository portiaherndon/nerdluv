<?DOCTYPE hmtl>
<html>
	<?php 
	echo var_dump($_POST);
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
	

	else
	{
		$file = 'singles.txt';	
		file_put_contents($file,$_POST['name'], FILE_APPEND | LOCK_EX);
		
		

	
					
	}
	?>	
</html>


