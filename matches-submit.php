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
					$num1 = elements[5];
					echo $num1;

					$max = elements[6];
					break;
				}	
			}
			for($i=0;$i<count($lines);++$i)
			{
			
				$element = explode(",",$lines[$i]);
				
				if($search !== $element[0])	
				{
					
					if($sex !== $element[1]) 	
					{
			
						if(($age >= $element[5]) && ($age <= $element[6]) && ($element[2] >= $num1))
						{	
							echo $lines[$i];
							if($OS === $element[4])
							{
								echo $element[0]; ?><br><?php
							} 
						}
					}
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
