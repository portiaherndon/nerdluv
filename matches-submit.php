<?php include("top.html"); 
function find_user($user,$file)
{ 
    if(strpos(file_get_contents($file),$user)) 
    {
        $lines = explode("\n",file_get_contents($file)); 
        for($i=0; $i<count($lines); ++$i)
        { 
            $elements = explode(",",$lines[$i]); 
            if($user === $elements[0])
            { 
   	        break;
	    }	
        }
    } 
    return $lines[$i];
}
function compare($user_string,$file)
{
    $count =0;
    $matches = array();
    $user = explode(",",$user_string);
    $lines = explode("\n",file_get_contents($file));
    for($i=0;$i<count($lines);++$i)
    {
   	$element = explode(",",$lines[$i]);
	if($user[0] !== $element[0])
	{
	    if($user[1] !== $element[1])
	    {
		if(($user[2] >= $element[5]) && ($user[2] <= $element[6]) && ($element[2] >= $user[5]) && ($element[2] <= $user[6]))
		{
		    if($user[4] === $element[4])
		    {
			$sim = similar_text($user[3],$element[3],$perc);
			if($matches > 0)
			{
			    $matches[$count] = $lines[$i];	
			    $count++;
			}
		    }
		}
	    }
	}
    } 
    return $matches; 
}
?>
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
	    	else 
		{ 
		    $user = find_user($search,$file); 
		    $total_matches = compare($user,$file); 
		    if(count($total_matches) != 0)
		    {
			?><p><strong> Matches for <?= $search;
		    	?></strong></p><?php 
		        for($loop=0;$loop<count($total_matches);++$loop)		
		        {
			    $element = explode(",",$total_matches[$loop]);
			    ?>
			    <div class ="match" >
		    	    	<p>
			    	<img src ="photos/user.jpg" alt="user image" /> <?=
				    $element[0]; ?>
				</p> 
				<ul>
				    <li><strong>Gender:</strong><?= $element[1] ?></li>
				    <li><strong>Age: </strong><?= $element[2] ?></li>
				    <li><strong>Type: </strong><?= $element[3] ?></li>
				    <li><strong>OS: </strong><?= $element[4] ?></li> 
				</ul> 
			    </div>
			    <?php 
			} 
		    } 
	    	    else
	    	    {
	    	    ?>
		    <p> There are no matches </p>
	    	    <?php
	    	    } 
		}
	    	?>
	</body>
</html>
<?php include("bottom.html"); ?>
