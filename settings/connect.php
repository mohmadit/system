<?php
	$websiteaddresse='http://localhost/work/YKtechnology/';
	$domain='localhost';
	$dbname='yktechnology';
	$dsn = 'mysql:host='.$domain.';dbname='.$dbname;
	$user = 'root';
	$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}
?>