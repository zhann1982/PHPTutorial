<?php  
	session_start();
	$userEntered = $_SESSION['uid'];
	//echo "Welcome! " . $userEntered; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
</head>
<body>
<?php  
	echo "<h1>Welcome! " . $userEntered . "</h1>"; 
?>
</body>
</html>