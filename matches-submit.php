<?php include("top.html"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Matches
		</title> 
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
			?><p><strong> Matches for <?php echo $search;
			?></strong></p><br><?php 
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
						if(($age >= $element[5]) && ($age <= $element[6]) && ($element[2] >= $elements[5]) && ($element[2] <= $elements[6]))
						{	
							if($OS === $element[4])
							{
							?>
								<div class ="match" >
								<p>
								<img src ="photos/user.jpg" alt="user image" /> <?php
								echo $element[0]; ?>
								
								<ul>
								<li>Gender: </li>
								<li>Age:</li>
								<li>Type:</li>
								<li>OS:</li>
								</p>
								</ul>
								</div>
<?php
							
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
<?php include("bottom.html"); ?>
