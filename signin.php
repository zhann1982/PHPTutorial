<?php

include 'db/dbconn.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

if ($first == "" or $last == "" or $uid == "" or $pwd == "" or $pwd2 == "") {
	
	$info = "<h3>Please, fill in all fields</h3>
			<br>
			<form action='index.php'>
				<input type='submit' value='Return to Sign in.'>
			</form>";
	die($info);
}

if ($pwd != "" and $pwd2 != "" and $pwd != $pwd2) {
	
	$info = "<h3>Password confirmation failed</h3>
			<br>
			<form action='index.php'>
				<input type='submit' value='Return to Sign in page'>
			</form>";
	die($info);
}

if ($result = $db->query("SELECT `uid` FROM login WHERE `uid` = '$uid'")) {
	if ($result->num_rows > 0){    // number of result . If zero, then no result
		$info = "<h3>Sorry! This username is not available.</h3>
				<br>
				<form action='index.php'>
					<input type='submit' value='Return to Sign in page'>
				</form>";
		die($info);
	}
}

if ($pwd == $pwd2) {

	$sql = "INSERT INTO login (`first`,`last`,`uid`,`pwd`) VALUES ('$first','$last','$uid','$pwd')";
	$result = $db->query($sql);
	session_start();
	$_SESSION['uid'] = $uid;
	header('location: main.php');

}






?>