<?php
	$host = 'localhost';
	$dbuser ='root';
	$dbpass = '';
	$dbname = 'mmocatDB';

	$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

	if ($conn->connect_errno)
	{
		die('cant connect to database ');
	}
?>