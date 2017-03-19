<!DOCTYPE html>
<html>
	<head>
		<title>Matches
		</title>
		<img src="photos/nerdluv.png" alt="nerdluv logo" /><br>
		where meek geeks meet<br><br>
	</head>
	<body> 
		<?php
		$file="singles.txt";
		$search= $_GET['name'];
		if(strpos(file_get_contents($file),$search)) 
		{
			?> <p> Matches for <?php echo $search;
			 
			$lines = explode("\n",file_get_contents($file));
			
			
				
					
		}
		
		echo $array[5];
		var_dump($lines);	 
		?>
	</body>
</html>
