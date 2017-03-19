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
		if(empty($search))
		{
		?>
			<p>Error: Required field left empty</p>
		<?php
		}
		elseif(strpos(file_get_contents($file),$search)) 
		{
			?> <p> Matches for <?php echo $search;
			?><br><?php 
			$lines = explode("\n",file_get_contents($file));
			for($i=0; $i<count($lines); ++$i)
			{
				$elements = explode(",",$lines[$i]);
				if($search === $elements[0])
				{
					$sex = $elements[1];
					$age = $elements[2];
					$person = $elements[3];
					$OS = $elements[4];
					$min = elements[5];
					$max = elements[6];
				}	
			}
			foreach ($lines as $line)
			{
				$elements = explode(",",$line);
				if($search !== elements[0])
				{
				
				}					
			} 
		}
		else
		{
		?>
			<p>Error: User does not exist</p>
		<?php
		} 
		?>
	</body>
</html>
