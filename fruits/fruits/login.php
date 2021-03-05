<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$DB_CONNECTION  =  'mysql';
	$DB_HOST  =  'localhost';
	$DB_PORT  =  3306;
	$DB_DATABASE  =  'sales';
	$DB_USERNAME  =  'ketra';
	$DB_PASSWORD  =  'ketra';
	$db = new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_DATABASE, $DB_USERNAME, $DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	

	
	//Sanitize the POST values
	$login = $_POST['username'];
	$password = $_POST['password'];
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	$ava = '0';
	
	//Create query
	$PasswordResult = $db->prepare("SELECT * FROM user WHERE username=:username AND password=:password");
	$PasswordResult->bindParam(':username', $login);
	$PasswordResult->bindParam(':password', $password);
	$PasswordResult->execute();
	for($i=0; $row = $PasswordResult->fetch(); $i++){
			$ava = '1';
			$_SESSION['SESS_MEMBER_ID'] = $row['id'];
			$_SESSION['SESS_FIRST_NAME'] = $row['name'];
			$_SESSION['SESS_LAST_NAME'] = $row['position'];
	}

	if ($ava == 1) {
		$_SESSION['SESS_MEMBER_ID'] = TRUE;
			header("location: main/index.php");
			exit();
	}
	else{
		header("location: index.php");
			exit();	
	}