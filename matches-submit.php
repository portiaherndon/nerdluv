<?php include("top.html"); 
//THIS FUNCTION IS CALLED FIND_USER. IT TAKES BOTH THE NAME SENT FROM MATCHES-PHP AND THE FILE TO SEARCH FOR THE USER IN THE FILE. IT THEN RETURNS THE USER'S INFO TO THE MAIN CODE 
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
//THIS FUNCTION IS CALLED COMPARE AND TAKES THE SAME PARAMETERS. I JUST REALIZED THAT I COULD HAVE CALLED THIS FUNCTION FROM THE FIND_USER FUNCTION AND ELIMINATED THE AMOUNT OF PHP CODE IN BETWEEN THE HTML. IF I HAVE ENOUGH TIME, I WILL MAKE THOSE CHANGES.THIS FUNCTION RETURNS ALL OF THE MATCHES.
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
<!-- THIS PAGE RECEIVES THE USER'S NAME BY WAY OF GET, LOOKS UP THAT NAME, STORES OF THE USER'S INFOINTO AN ARRAY AND THEN CYCLES THROUGH THE FILE FOR MATCHES.
THE FIND_USER FUNCTION SIMPLY LOOKS FOR THE USER IN THE FILE TO SEE IF THIS USER IS EXISTS IN THE SYSTEM. ONCE FOUND, THAT USER'S INFOR IS SENT BACK TO THE COMPARE FUNCTION TO COMPARE THAT USER TO THE OTHER USERS IN THE FILE. THIS FUNCTION BREAKS EACH LINE DOWN TO AN ARRAY OF THE POTENTIAL MATCHES INFO. IF MATCHES BASED ON CERTAIN CRITERIA, THE ORIGINAL, BEFORE IT WAS BROKEN INTO AN ARRAY, IS RETURNED FROM THE FUNCTION TO BE DISPLAYED TO THE USER --> 
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
		/*HERE THE 2 FUNCTION ARE CALLED. IF THE MATCHES ARE FOUND, 
			TOTAL_MATCHES !== 0, THEN I BEGIN TO PRINT THE 
			INFORMATION*/ 
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
		<!-- HERE I USE THE DYNAMIC EXPRESSION TO OUTPUT ALL OF THE INFO OF THE MATCHES -->
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
<?php include("bottom.html"); ?>
