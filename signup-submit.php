<!DOCTYPE html>
<html>
<body>
<?php
var_dump($_POST); 
echo ($_POST['name']); ?><br>
<?php echo ($_POST['cc']); ?><br>
<?php $age = $_POST['age'];
echo intval($age);  
print_r($_POST['personality type']);
?>
</body>
</html>
	

