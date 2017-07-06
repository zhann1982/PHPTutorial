<?php

include 'db/dbconn.php';

$uid = $_POST['uid2'];
$pwd = $_POST['pwd2'];


if ($uid == "" or $pwd == "") {
	
	$info = "<h3>Please, fill in all fields</h3>
			<br>
			<form action='index.php'>
				<input type='submit' value='Return to Login'>
			</form>";
	die($info);
}

$sql = "SELECT `uid`, `pwd` FROM login WHERE `uid` = '$uid'";
$result = $db->query($sql);
if (!$result) {

	$info = "<h3>Wrong username or password! </h3>
			<br>
			<form action='index.php'>
				<input type='submit' value='Return to Login'>
			</form>";
	die($info);
	
}

if ($result->num_rows == 1){    // number of result . If zero, then no result

	$row = $result->fetch_assoc();

	if ($pwd != $row['pwd']) {
		$info = "<h3>Wrong password! </h3>
			<br>
			<form action='index.php'>
				<input type='submit' value='Return to Login'>
			</form>";
		die($info);
	} else {	
		session_start();
		$_SESSION['uid'] = $uid;
		header('location: main.php');
	}


}




?>