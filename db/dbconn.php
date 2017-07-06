<?php

$db = new mysqli('127.0.0.1', 'root', '', 'app');

if ($db->connect_errno) {
	echo $db->connect_errno . '<br />';
	die('Sorry, we are having some problems.<hr />');
}

?>